<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsletterMemberRequest;
use App\Models\NewsletterMember;
use Filament\Notifications\Notification;
use Illuminate\Http\RedirectResponse;

class NewsletterMemberController extends Controller
{
    public function store(StoreNewsletterMemberRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        NewsletterMember::updateOrCreate(
            ['email' => $validated['email']],
            ['name' => $validated['first_name'].' '.$validated['last_name']]
        );

        Notification::make()
            ->title('Newsletter subscribed successfully')
            ->success()
            ->persistent()
            ->send();

        return redirect()->route('home');
    }
}
