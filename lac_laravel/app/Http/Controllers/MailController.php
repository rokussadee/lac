<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\Facades\Newsletter;

class MailController extends Controller
{
    public function storeNewSubscriber(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            if (Newsletter::isSubscribed($request->input('email'))) {
                return redirect()->back()->with('error', 'the email-address you submitted is already subscribed to our newsletter');
            } else {
                Newsletter::subscribe($request->input('email'));
                return redirect()->back()->with('success', 'thank you for subscribing to our newsletter!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());

        }
    }
}
