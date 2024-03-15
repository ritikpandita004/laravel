<?php
use App\Models\Customer;
use App\Http\Controllers\customerController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AppController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\ph;

// use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/customer",[customerController::class,"index"]);
Route::get ("/customer/view",[customerController::class,"view"]);
Route::get ("/customer/delete/{id}",[customerController::class,"delete"])->name("customer.delete");
Route::get ("/customer/edit/{id}",[customerController::class,"edit"])->name("customer.edit");
Route::post ("/customer/update/{id}",[customerController::class,"update"])->name("customer.update");
Route::post("/customer",[customerController::class,"store"]);
// Route::get("/customer", function () {
//     $customers=customer::all();
//     echo"<pre>";
//     print_r($customers-> toArray());
// });
