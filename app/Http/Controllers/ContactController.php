<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('layouts.contact');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'body' => $request->input('text')
        ];
        
        Mail::send('emails.guest_mail', $data, function ($message) use ($request){
            $message->from($request->input('email'), $request->input('name'));
            $message->to('jakedev@arcis.com');
            $message->subject('Sent Throught Contact Us');
        });
        
        return redirect('index')->with('success', 'email send!');
    }
}