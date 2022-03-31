<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
        $inputs = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);

        try {
            Mail::send('email', ['content' => $inputs['message']], function (Message $message) use ($inputs) {
                $message->subject('Message received from portfolio: ' . $inputs['subject'])
                    ->sender($inputs['email'], $inputs['name'])
                    ->from($inputs['email'], $inputs['name'])
                    ->to(config('app.admin_email'));
            });

            return redirect()
                ->route('contact')
                ->with('success-status', 'Your message has successfully been sent');
        } catch (Exception  $e) {
            return redirect()
                ->route('contact')
                ->with('error-status', 'Your message has failed to send');
        }
    }
}
