<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientCarInfo;
use App\Models\ClientInfo;
use App\Models\Employee;
use Illuminate\Http\Request;

class AssignClientsEmployeeController extends Controller
{
    public function index()
    {
        $clients = ClientInfo::with('cars')->paginate(10);
        // dd($clientLists);
        $employees = Employee::select('id', 'name')->get();
        return view('backend.assign-client-employee.index', compact('clients', 'employees'));
    }

    public function showAssignCarsForm($id)
    {
        $employee = Employee::findOrFail($id);
        $cars = ClientInfo::all();
        $assignedCarIds = $employee->cars->pluck('id')->toArray();

        return view('employees.assign_cars', compact('employee', 'cars', 'assignedCarIds'));
    }

    public function assignCars(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:client_car_info,id',
            'employee_id' => 'required|exists:employees,id',
        ]);

        $car = ClientCarInfo::find($request->car_id);
        $car->employees()->syncWithoutDetaching([$request->employee_id]);

        return redirect()->route('employees.index')->with('success', 'Cars assigned successfully.');
    }
}
