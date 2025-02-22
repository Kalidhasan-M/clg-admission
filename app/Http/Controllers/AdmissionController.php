<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionConfirmation;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
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
        $department = Department::where('department', $validatedData['course'])->first();
        if (!$department) {
            return redirect()->back()->withErrors(['course' => 'Invalid course selected']);
        }
        if ($request->hasFile('documents')) {
            $filePath = $request->file('documents')->store('admissions', 'public');
        }
        $student = Student::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'course' => $validatedData['course'],
            'department_id' => $department->id,
            'document_path' => $filePath ?? null,
        ]);
      // Send email with form data
      Mail::send('emails', ['student' => $student], function ($message) use ($student) {
        $message->to('admissionpandi@gmail.com')
                ->subject('New Admission: ' . $student->name);
    });
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
