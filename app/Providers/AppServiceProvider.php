<?php

namespace App\Providers;

use App\Models\GalleryMedia;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('gallery_medium', fn (string $value) => GalleryMedia::query()->findOrFail($value));

        // En production (ex. cPanel), forcer les URLs à partir de APP_URL pour que
        // les assets (images, CSS, etc.) s'affichent correctement derrière un proxy HTTPS.
        $appUrl = config('app.url');
        if ($appUrl && $this->app->environment('production')) {
            URL::forceRootUrl($appUrl);
            if (str_starts_with($appUrl, 'https://')) {
                URL::forceScheme('https');
            }
        }
    }
}
