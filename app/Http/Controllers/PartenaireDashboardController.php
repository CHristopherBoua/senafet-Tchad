<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PartenaireDashboardController extends Controller
{
    public function index(): View
    {
        $partenaire = Auth::guard('partenaire')->user();
        $partenaire->load('sector');

        return view('partenaire.dashboard', [
            'partenaire' => $partenaire,
        ]);
    }
}
