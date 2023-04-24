<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StaffServicesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::controller(StaffController::class)->group(function () {
    Route::get('/staff', 'index');
    Route::post('/staff', 'store');
    Route::get('/staff/{id}', 'show');
});

Route::controller(ServicesController::class)->group(function () {
    Route::get('/service', 'index');
    Route::post('/service', 'store');
    Route::get('/service/{id}', 'show');
});


Route::controller(StaffServicesController::class)->group(function () {
    Route::post('/staff_service', 'store');
});

// Route::controller(StaffServicesController::class)->group(function () {
//     Route::post('/staff_service', 'store');

// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
