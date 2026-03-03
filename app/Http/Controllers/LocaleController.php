<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    private const ALLOWED_LOCALES = ['fr', 'en', 'ar'];

    public function switch(Request $request, string $locale): RedirectResponse
    {
        if (! in_array($locale, self::ALLOWED_LOCALES)) {
            $locale = config('app.locale', 'fr');
        }

        Session::put('locale', $locale);
        app()->setLocale($locale);

        $intended = $request->query('intended');
        $homeUrl = route('home');
        if ($intended && $intended === $homeUrl) {
            return redirect()->to($intended);
        }

        return redirect()->route('home');
    }
}
