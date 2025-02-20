<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller 
{
    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'course' => 'required|string',
            'message' => 'nullable|string',
        ]);

        Enquiry::create($request->all());

        return redirect()->back()->with('success', 'Your enquiry has been submitted!');
    }
}
