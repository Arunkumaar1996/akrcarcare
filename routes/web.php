<?php

use App\Http\Controllers\Backend\AssignClientsEmployeeController;
use App\Http\Controllers\backend\CarTypeWisePriceEntrieController;
use App\Http\Controllers\backend\ClientInfoCRUDController;
use App\Http\Controllers\backend\ServicePlanController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\frontend\ClientServiceStoreController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\CarPrice;
use App\Models\ServicePlan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    $getPlan = ServicePlan::get();
    $carPrices =  CarPrice::paginate(10);
    $states = json_decode(file_get_contents('resources/jsons/tamilnadu_districts.json'));


    return view('welcome',compact('getPlan','carPrices','states'));
})->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');




Route::post('/serviceForm', [ClientServiceStoreController::class, 'store'])->name('serviceForm.store');
Route::get('/selected-plan/{id}', function ($id) {
   $getPlan = ServicePlan::findOrFail($id);

    return view('frontend.pages.price-select-form', compact('getPlan'));
});
Route::post('/find/plan/data', function (Request $request) {
   $getPlan = ServicePlan::findOrFail($request->id);

    return response()->json($getPlan);
})->name('find.plan.data');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/service-type', [ServicePlanController::class, 'create'])->name('service-plan.create');
Route::post('/service-type/store', [ServicePlanController::class, 'store'])->name('service-plan.store');
Route::post('/service-type/update', [ServicePlanController::class, 'update'])->name('service-plan.update');

Route::post('/car-price/store', [CarTypeWisePriceEntrieController::class, 'store'])->name('car-price.store');
// Route::post('/service-type/update', [ServicePlanController::class, 'update'])->name('service-plan.update');




Route::get('/client/list', [ClientInfoCRUDController::class, 'index'])->name('client.list');



//Create Employees
Route::get('/employees/create', [EmployeeController::class, 'index'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::post('/employees/{id}/toggle-status', [EmployeeController::class, 'toggleActiveStatus'])->name('form.employee.toggleStatus');


Route::get('/employees/client', [AssignClientsEmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees/assign-clients', [AssignClientsEmployeeController::class, 'assignCars'])->name('employees.assignClientsForm');
Route::post('/employees/{id}/assign-clients', [AssignClientsEmployeeController::class, 'assignClients'])->name('employees.assignClients');


require __DIR__ . '/auth.php';