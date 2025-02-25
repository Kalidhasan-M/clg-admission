<?php

namespace App\Http\Controllers;

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
            'number' => 'required|numeric',
            'message' => 'nullable|min:10',
        ]);
        Mail::raw($request->message, function ($mail) use ($request) {
            $mail->to('admissionpandi@gmail.com')
                 ->subject('New Contact Message')
                 ->from($request->email, $request->name);
        });

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
