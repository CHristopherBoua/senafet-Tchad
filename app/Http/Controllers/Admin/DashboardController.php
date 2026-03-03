<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partenaire;
use App\Models\PartenaireSector;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'partenairesCount' => Partenaire::query()->count(),
            'partenairesPublishedCount' => Partenaire::query()->where('is_published', true)->count(),
            'sectorsCount' => PartenaireSector::query()->count(),
        ]);
    }
}
