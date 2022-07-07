<?php

use App\Http\Controllers\Auth\RegisterStepsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/req', function () {
    return view('auth.requisites');
});

Route::get('/security', function () {
    return view('auth.security-code');
});

Route::get('/req2', function () {
    return view('auth.requisites2');
});

Route::get('/register/step/1', [RegisterStepsController::class, 'registerForm']);
Route::get('/register/step/1', [RegisterStepsController::class, 'businessForm']);
Route::get('/register/step/1', [RegisterStepsController::class, 'checkInputData']);
Route::get('/register/step/1', [RegisterStepsController::class, 'checkSMS']);
Auth::routes();
