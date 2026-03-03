<?php

use App\Http\Controllers\Admin\CarouselSlideController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryMediaController;
use App\Http\Controllers\Admin\HomeVideoSectionController;
use App\Http\Controllers\Admin\PartenaireController as AdminPartenaireController;
use App\Http\Controllers\Admin\PartenaireSectorController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\PartenaireLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\PartenaireDashboardController;
use App\Http\Middleware\RedirectPartenaireToLogin;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

Route::get('/admin/login', [AdminLoginController::class, 'show'])->name('login');
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');

Route::get('/espace-partenaire/login', [PartenaireLoginController::class, 'show'])->name('partenaire.login');
Route::post('/espace-partenaire/login', [PartenaireLoginController::class, 'store'])->name('partenaire.login.store');
Route::post('/espace-partenaire/logout', [PartenaireLoginController::class, 'destroy'])->name('partenaire.logout');
Route::get('/espace-partenaire', [PartenaireDashboardController::class, 'index'])->name('partenaire.dashboard')->middleware(RedirectPartenaireToLogin::class);

Route::get('/', fn () => view('splash'))->name('splash');

Route::get('/accueil', function () {
    $partenairesBySector = \App\Models\PartenaireSector::query()
        ->orderBy('sort_order')
        ->with(['partenaires' => fn ($q) => $q->where('is_published', true)->orderBy('sort_order')->orderBy('company')])
        ->get();
    $partenairesSansSector = \App\Models\Partenaire::query()
        ->where('is_published', true)
        ->whereNull('partenaire_sector_id')
        ->orderBy('sort_order')
        ->orderBy('company')
        ->get();
    $carouselSlides = \App\Models\CarouselSlide::query()
        ->active()
        ->ordered()
        ->get();
    $homeVideoSection = \App\Models\HomeVideoSection::query()->active()->first();
    return view('home', [
        'partenairesBySector' => $partenairesBySector,
        'partenairesSansSector' => $partenairesSansSector,
        'carouselSlides' => $carouselSlides,
        'homeVideoSection' => $homeVideoSection,
    ]);
})->name('home');

Route::get('/partenaires', [PartenaireController::class, 'index'])->name('partenaires.index');
Route::post('/partenaires', [PartenaireController::class, 'store'])->name('partenaires.store');

Route::get('/galerie', function () {
    $media = \App\Models\GalleryMedia::query()->active()->ordered()->get();
    return view('galerie', ['media' => $media]);
})->name('galerie');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

// Le SENAFET Tchad
Route::prefix('senafet')->name('senafet.')->group(function () {
    Route::get('/presentation', fn () => view('presentation.about'))->name('presentation');
    Route::get('/inscription', [InscriptionController::class, 'show'])->name('inscription');
    Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');
    Route::get('/accreditation-media', fn () => view('pages.senafet.accreditation-media'))->name('accreditation-media');
    Route::get('/panelistes', fn () => view('pages.senafet.panelistes'))->name('panelistes');
});

// Participation
Route::prefix('participation')->name('participation.')->group(function () {
    Route::get('/exposant', fn () => view('pages.participation.exposant'))->name('exposant');
    Route::get('/sponsor', fn () => view('pages.participation.sponsor'))->name('sponsor');
});

// Infos pratiques
Route::prefix('infos')->name('infos.')->group(function () {
    Route::get('/tarifs', fn () => view('pages.infos.tarifs'))->name('tarifs');
    Route::get('/actualites', fn () => view('presentation.news', ['news' => []]))->name('actualites');
    Route::get('/programme', fn () => view('presentation.programme', ['events' => []]))->name('programme');
});

// Redirections anciennes URLs vers nouvelles
Route::redirect('/presentation/a-propos', '/senafet/presentation', 301);
Route::redirect('/presentation/actualites', '/infos/actualites', 301);
Route::redirect('/presentation/programmes', '/infos/programme', 301);
Route::redirect('/inscription', '/senafet/inscription', 301);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/partenaires', [AdminPartenaireController::class, 'index'])->name('partenaires.index');
    Route::patch('/partenaires/{partenaire}', [AdminPartenaireController::class, 'update'])->name('partenaires.update');
    Route::resource('sectors', PartenaireSectorController::class)->except(['show'])->names('sectors');
    Route::resource('carousel-slides', CarouselSlideController::class)->except(['show'])->names('carousel');
    Route::resource('gallery-media', GalleryMediaController::class)->except(['show'])->names('gallery');
    Route::get('/home-video-section', [HomeVideoSectionController::class, 'edit'])->name('home-video-section.edit');
    Route::put('/home-video-section', [HomeVideoSectionController::class, 'update'])->name('home-video-section.update');
});
