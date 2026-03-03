<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartenaireRequest;
use App\Models\Partenaire;
use App\Models\PartenaireSector;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PartenaireController extends Controller
{
    public function index(): View
    {
        $sectors = PartenaireSector::query()
            ->orderBy('sort_order')
            ->with(['partenaires' => fn ($q) => $q->where('is_published', true)->orderBy('sort_order')->orderBy('company')])
            ->get();

        $partenairesForMarquee = Partenaire::query()
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('company')
            ->with('sector')
            ->get()
            ->map(fn (Partenaire $p) => [
                'name' => $p->company,
                'logo' => $p->logo_path ? 'storage/'.$p->logo_path : 'logo.png',
            ])
            ->all();

        return view('partenaires.index', [
            'partenairesBySector' => $sectors,
            'partenaires' => $partenairesForMarquee,
            'sectors' => PartenaireSector::query()->orderBy('sort_order')->get(),
        ]);
    }

    public function store(StorePartenaireRequest $request): RedirectResponse
    {
        $path = null;
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partenaires/logos', 'public');
        }

        $data = [
            'partenaire_sector_id' => $request->validated('partenaire_sector_id'),
            'company' => $request->validated('company'),
            'contact_name' => $request->validated('contact_name'),
            'email' => $request->validated('email'),
            'phone' => $request->validated('phone'),
            'level' => $request->validated('level'),
            'logo_path' => $path,
            'message' => $request->validated('message'),
            'is_published' => false,
        ];
        if ($request->filled('password')) {
            $data['password'] = $request->validated('password');
        }
        Partenaire::query()->create($data);

        return redirect()->route('partenaires.index')->with('success', __('partenaires.success'));
    }
}
