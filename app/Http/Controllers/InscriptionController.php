<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class InscriptionController extends Controller
{
    public function show(): View
    {
        return view('inscription');
    }

    public function store(Request $request): RedirectResponse
    {
        Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:50',
        ])->validate();

        return redirect()->route('senafet.inscription')->with('success', __('inscription.success'));
    }
}
