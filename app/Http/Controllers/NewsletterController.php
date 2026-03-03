<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterSubscriptionRequest;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\RedirectResponse;

class NewsletterController extends Controller
{
    public function store(StoreNewsletterSubscriptionRequest $request): RedirectResponse
    {
        $email = $request->validated('newsletter_email');

        if (NewsletterSubscriber::query()->where('email', $email)->exists()) {
            return redirect()->back()->with('newsletter_error', __('footer.newsletter_already'));
        }

        NewsletterSubscriber::query()->create(['email' => $email]);

        return redirect()->back()->with('newsletter_success', __('footer.newsletter_success'));
    }
}
