<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('admissionpandi@gmail.com')
                 ->subject('New Contact Message')
                 ->from($request->email, $request->name);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
