<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceRequestController;


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
    return view('welcome');
});


Route::resource('members', App\Http\Controllers\memberController::class);


Route::resource('service_requests', App\Http\Controllers\ServiceRequestController::class);


Route::get('/service-requests/create', [ServiceRequestController::class, 'create'])->name('service_requests.create');
Route::post('/service-requests', [ServiceRequestController::class, 'store'])->name('service_requests.store');
Route::get('/service-requests', [ServiceRequestController::class, 'index'])->name('service_requests.index');



