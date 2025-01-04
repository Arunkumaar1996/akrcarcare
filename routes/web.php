<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/serviceForm', function (Request $request) {
    dd($request);
})->name('serviceForm.store');
Route::get('/selected-plan/{id}', function ($id) {
    $data = '[
        {
            "id": 1,
            "plan_name": "Basic Plan",
            "price": 9.99
        },
        {
            "id": 2,
            "plan_name": "Standard Plan",
            "price": 19.99
        },
        {
            "id": 3,
            "plan_name": "Premium Plan",
            "price": 29.99
        }
    ]';
    
   $getPlan = collect(json_decode($data))->where('id',$id)->first();
   return view('frontend.pages.price-select-form',compact('getPlan'));
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
