<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientServiceStoreController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            // 'service_price' => 'required|numeric|min:0',
            // 'service_type' => 'required|string|max:255',
            'service_type_id' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|digits:10',
            'door_no' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state_code' => 'required|regex:/^[A-Z]{2}$/',
            'district_code' => 'required|regex:/^\d{2}$/',
            'series_code' => 'required|regex:/^[A-Z]{2}$/',
            'number_code' => 'required|regex:/^\d{4}$/',
            'car_type' => 'required|string|in:SUV,Sedan,Hatchback,Foreign',
            'car_name' => 'required|string|max:255',
        ]);

        $carNumber = sprintf(
            '%s %s %s %s',
            $validatedData['state_code'],
            $validatedData['district_code'],
            $validatedData['series_code'],
            $validatedData['number_code']
        );
        // dd($validatedData,$carNumber);
        return redirect()->route('home')->with('success', 'Service form submitted successfully!');
    }

}
