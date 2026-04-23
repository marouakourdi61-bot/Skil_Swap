<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ExchangeMessageMail;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'to_email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        //   dd($request->all());


        Mail::to($request->to_email)
            ->send(new ExchangeMessageMail([
                'from' => auth()->user()->email,
                'to_email' => $request->to_email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]));

        return back()->with('success', 'Message sent successfully!');
    }
}