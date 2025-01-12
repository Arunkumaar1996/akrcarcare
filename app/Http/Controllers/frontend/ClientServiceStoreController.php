<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientCarInfo;
use App\Models\ClientInfo;
use App\Models\ClientServiceInfo;
use Illuminate\Http\Request;

class ClientServiceStoreController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'service_type_name' => 'required',
            'service_type_price' => 'required|numeric|min:0',
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|digits:10',
            'door_no' => 'required',
            'address1' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pin_code' => 'required',
            'state_code' => 'required|regex:/^[A-Z]{2}$/',
            'district_code' => 'required|regex:/^\d{2}$/',
            'series_code' => 'required|regex:/^[A-Z]{2}$/',
            'number_code' => 'required|regex:/^\d{4}$/',
            'car_type' => 'required',
            'car_name' => 'required|string|max:255',
        ]);

        // Create client info
        $clientInfo = ClientInfo::create([
            'client_name' => $validatedData['client_name'],
            'client_email' => $validatedData['client_email'],
            'client_phone' => $validatedData['client_phone'],
            'door_no' => $validatedData['door_no'],
            'address1' => $validatedData['address1'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'pin_code' => $validatedData['pin_code'],
        ]);

        // Create car info
        $carNumber = sprintf(
            '%s %s %s %s',
            $validatedData['state_code'],
            $validatedData['district_code'],
            $validatedData['series_code'],
            $validatedData['number_code']
        );

        $clientCarInfo = ClientCarInfo::create([
            'service_type_name' => $validatedData['service_type_name'],
            'service_type_price' => $validatedData['service_type_price'],
            'car_number' => $carNumber,
            'car_name' => $validatedData['car_name'],
        ]);

        // Associate the client with the car service info
        ClientServiceInfo::create([
            'client_info_id' => $clientInfo->id,
            'client_car_info_id' => $clientCarInfo->id,
        ]);

        // Redirect or return response
        return redirect()->route('home')->with('success', 'Service form submitted successfully!');
    }

}
