<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'newsletter' => 'nullable|boolean'
        ]);

        // Prepare email data
        $emailData = [
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message']
        ];

        // Send email (you'll need to configure mail settings in .env)
        try {
            Mail::raw(
                "You have received a new message from your website contact form:\n\n" .
                "Name: {$emailData['first_name']} {$emailData['last_name']}\n" .
                "Email: {$emailData['email']}\n\n" .
                "Message:\n{$emailData['message']}\n",
                function ($message) use ($emailData) {
                    $message->to('support@tuwanx.com')
                        ->subject('New Contact Form Message: ' . $emailData['subject'])
                        ->replyTo($emailData['email']);
                }
            );

            return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Sorry, there was a problem sending your message. Please try again later.');
        }
    }
}
