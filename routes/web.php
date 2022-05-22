<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [CustomerController::class,'index']);

Route::get('customer/create-step-one', [CustomerController::class,'createStepOne'])->name('createStepOne');

Route::post('customer/create-step-one', [CustomerController::class,'postStepOne'])->name('postStepOne');

Route::get('customer/create-step-two', [CustomerController::class,'createStepTwo'])->name('createStepTwo');

Route::post('customer/create-step-two', [CustomerController::class,'postStepTwo'])->name('postStepTwo');

Route::get('customer/create-step-three', [CustomerController::class,'createStepThree'])->name('createStepThree');

Route::post('customer/create-step-three', [CustomerController::class,'postStepThree'])->name('postStepThree');

Route::get('customer/create-step-four', [CustomerController::class,'createStepFour'])->name('createStepFour');
