<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class,'index'])->name('index');
Route::post('/store',[EmployeeController::class,'employeeStore'])->name('employee.Store');
Route::get('/edit/{id}',[EmployeeController::class,'employeeEdit'])->name('employee.Edit');
Route::post('/update',[EmployeeController::class,'employeeUpdate'])->name('employee.Update');
Route::get('/delete/{id}',[EmployeeController::class,'employeeDelete'])->name('employee.Delete');
