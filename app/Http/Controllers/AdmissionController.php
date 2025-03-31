<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\AdmissionConfirmation;
use App\Mail\Alert;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        try {
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
            
            try {
                // Mail::to('admissionpandi@gmail.com')->send(new Alert($student));
                // Mail::to($student->email)->send(new AdmissionConfirmation($student));
            } catch (\Exception $e) {
                // Use the fully qualified namespace
                // \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
                // Continue execution even if mail fails
            }
            
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            // Use the fully qualified namespace
            \Illuminate\Support\Facades\Log::error('Admission process failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
}
