<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartenaireSector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PartenaireSectorController extends Controller
{
    public function index(): View
    {
        $sectors = PartenaireSector::query()->orderBy('sort_order')->get();
        return view('admin.sectors.index', ['sectors' => $sectors]);
    }

    public function create(): View
    {
        return view('admin.sectors.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:partenaire_sectors,slug',
            'sort_order' => 'nullable|integer|min:0',
        ]);
        $slug = $validated['slug'] ?? \Illuminate\Support\Str::slug($validated['name']);
        PartenaireSector::query()->create([
            'name' => $validated['name'],
            'slug' => $slug,
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
        ]);
        return redirect()->route('admin.sectors.index')->with('success', __('admin.sector_created'));
    }

    public function edit(PartenaireSector $sector): View
    {
        return view('admin.sectors.edit', ['sector' => $sector]);
    }

    public function update(Request $request, PartenaireSector $sector): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:partenaire_sectors,slug,'.$sector->id,
            'sort_order' => 'nullable|integer|min:0',
        ]);
        $sector->update([
            'name' => $validated['name'],
            'slug' => $validated['slug'] ?? \Illuminate\Support\Str::slug($validated['name']),
            'sort_order' => (int) ($validated['sort_order'] ?? 0),
        ]);
        return redirect()->route('admin.sectors.index')->with('success', __('admin.sector_updated'));
    }

    public function destroy(PartenaireSector $sector): RedirectResponse
    {
        $sector->delete();
        return redirect()->route('admin.sectors.index')->with('success', __('admin.sector_deleted'));
    }
}
