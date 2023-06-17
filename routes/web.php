<?php

use Illuminate\Support\Facades\Route;
//digunakan untuk memanggil Controller Prifle
use App\Http\Controllers\ProfileController;
//Digunakan untuk memanggil Controller Employee
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Routing Profile
Route::get('profile', ProfileController::class)->name('profile');

//Routing Employee
Route::resource('employees', EmployeeController::class);
