<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientInfo;
use App\Models\Employee;
use Illuminate\Http\Request;

class AssignClientsEmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('cars')->get();
        return view('employees.index', compact('employees'));
    }

    public function showAssignCarsForm($id)
    {
        $employee = Employee::findOrFail($id);
        $cars = ClientInfo::all();
        $assignedCarIds = $employee->cars->pluck('id')->toArray();

        return view('employees.assign_cars', compact('employee', 'cars', 'assignedCarIds'));
    }

    public function assignCars(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $carIds = $request->input('cars', []);

        $employee->cars()->sync($carIds);

        return redirect()->route('employees.index')->with('success', 'Cars assigned successfully.');
    }
}
