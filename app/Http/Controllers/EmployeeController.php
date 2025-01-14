<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Hash;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);
        return view('backend.employees.create', compact('employees'));
    }

    public function store(Request $request)
    {
        // dd($request);   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees',
            'contact_no' => 'required|string|max:10',
            'address' => 'required|string',
            'aadhar_card_no' => 'required|string|max:12',
            'salary' => 'required|numeric|min:0',
            'unique_id' => 'required|string|unique:employees',
            'joining_date' => 'required|date',
            'date_of_birth' => 'required|date',
        ]);

        $password = Hash::make(date('Ymd', strtotime($request->date_of_birth)));
        // dd($password);
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'aadhar_card_no' => $request->aadhar_card_no,
            'is_active' => $request->has('is_active') ? 1 : 0,
            'salary' => $request->salary,
            'unique_id' => $request->unique_id,
            'joining_date' => $request->joining_date,
            'date_of_birth' => $request->date_of_birth,
            'password' => $password,
        ]);

        return redirect()->back()->with('success', 'Employee registered successfully!');
    }
    public function toggleActiveStatus(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->is_active = $request->is_active;
        $employee->save();

        return response()->json([
            'success' => true,
            'message' => 'Employee status updated successfully!',
        ]);
    }
}
