<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1) validate incoming data
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // 2) prepare data for the email view
        $data = [
            'name'  => $validated['name'],
            'email' => $validated['email'],
            'body'  => $validated['message'],  // your blade can use $body
        ];

        // 3) actually send the email
        Mail::send('emails.contact', $data, function ($msg) {
            $msg->to('apondas007890@gmail.com', 'Apon Kumar Das')
                ->subject('New Message from Portfolio Website');
        });

        // 4) if this was an AJAX request (fetch / axios)
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => '✅ Your message has been sent successfully!',
            ]);
        }

        // 5) normal old-school POST (no JS) → redirect back with flash
        return back()->with('success', '✅ Your message has been sent successfully!');
    }
}
