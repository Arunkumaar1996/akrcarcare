<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CarPrice;
use App\Models\ServicePlan;
use Illuminate\Http\Request;

class ServicePlanController extends Controller
{
    public function index(){

    }
    public function create(){
        $getPlans =  ServicePlan::paginate(10);
        $carPrices =  CarPrice::paginate(10);
        // dd($carPrices);
        return view('backend.service-plan.create',compact('getPlans','carPrices')); 
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'plan_name' => 'required|string|max:255',
            'plan_price' => 'required|numeric|min:1|max:9999',
        ]);
        ServicePlan::create([
            'plan_name' => strtolower($validatedData['plan_name']),
            'plan_price' => $validatedData['plan_price'],
        ]);
        // dd($request->all());
        return redirect()->back()->with('success', 'Service plan created successfully!');

    }
    public function update(Request $request){
        // dd($request->all());
        $servicePlan = ServicePlan::findOrFail($request->plan_id_edit);
     $validate = $request->validate([
            'plan_name' => 'required|string|max:255',
            'plan_price' => 'required|numeric|min:0',
            'plan_id_edit' => 'required|numeric|min:0',
        ]);
        try {
            $servicePlan->update([
                'plan_name' => strtolower($request->input('plan_name')),
                'plan_price' => $request->input('plan_price'),
            ]);
            return redirect()->back()->with('success', 'Service plan updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update service plan');
        }
        // dd($validate,$servicePlan);
    }

}
