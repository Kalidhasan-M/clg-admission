<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'required|digits:10',
            'course' => 'required|string',
            'documents' => 'required|file|mimes:pdf,jpg,png|max:2048',
        ]);
        if ($request->hasFile('documents')) {
            $filePath = $request->file('documents')->store('admissions', 'public');
        }
        Student::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'course' => $validatedData['course'],
            'document_path' => $filePath ?? null,
        ]);
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
