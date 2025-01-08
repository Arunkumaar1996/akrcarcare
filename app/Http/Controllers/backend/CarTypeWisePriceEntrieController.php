<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CarPrice;
use Illuminate\Http\Request;

class CarTypeWisePriceEntrieController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            'car_type' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);
    
        CarPrice::create([
            'car_type' => strtolower($validated['car_type']),
            'price' => $validated['price'],
        ]);
    
        return redirect()->back()->with('success', 'Car price submitted successfully!');
    }
}
