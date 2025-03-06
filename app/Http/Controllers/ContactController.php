<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        $brand = Logo::first();
        return view('contact', compact('brand'));
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'nullable|min:10',
        ]);
       Mail::to('kalidhasan320@gmail.com')->send(new ContactMessage(
            $request->name,
            $request->email,
            $request->message,
        ));
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
