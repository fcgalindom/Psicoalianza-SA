<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CityController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('login', [EmployeeController::class, 'login']);
Route::get('home', [EmployeeController::class, 'home'])->name('home');

Route::resource('charges', ChargeController::class);
Route::resource('employee', EmployeeController::class);
Route::get('/get-cities/{countryId}', [CityController::class, 'getCities']);