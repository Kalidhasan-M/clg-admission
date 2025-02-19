<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Doctrine\DBAL\Schema\View;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }
    public function show($id)
    {
        $departments = Department::Where('forms',$id);
        return View('Application');
    }
    public function saveForm(Request $request)
    {
        $request->validate([
            'form_data' => 'required|json',
        ]);

        Department::create([
            'form_data' => $request->input('form_data'),
        ]);

        return response()->json(['message' => 'Form saved successfully!']);
    }
}
