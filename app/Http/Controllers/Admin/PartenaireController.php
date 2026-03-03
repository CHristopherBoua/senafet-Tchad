<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partenaire;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartenaireController extends Controller
{
    public function index(): View
    {
        $partenaires = Partenaire::query()
            ->with('sector')
            ->orderBy('is_published')
            ->orderBy('company')
            ->get();

        return view('admin.partenaires.index', [
            'partenaires' => $partenaires,
        ]);
    }

    public function update(Partenaire $partenaire): RedirectResponse
    {
        $partenaire->update(['is_published' => ! $partenaire->is_published]);
        return redirect()->route('admin.partenaires.index')->with('success', __('admin.partner_updated'));
    }
}
