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

Route::group(['middleware' => 'guest', 'as' => 'register.step.', 'prefix' => '/register/'], function () {
    Route::get('step/1', [RegisterStepsController::class, 'registerForm'])
        ->name('1')
        ->middleware('register_step:1');
    Route::post('step/1', [RegisterStepsController::class, 'registerForm'])
        ->middleware('register_step:1');;

    Route::get('step/2', [RegisterStepsController::class, 'businessForm'])
        ->name('2')
        ->middleware('register_step:2');
    Route::post('step/2', [RegisterStepsController::class, 'businessForm'])
        ->middleware('register_step:2');;

    Route::get('step/3', [RegisterStepsController::class, 'checkInputData'])
        ->name('3')
        ->middleware('register_step:3');
    Route::post('step/3', [RegisterStepsController::class, 'checkInputData'])
        ->middleware('register_step:3');

    Route::get('step/4', [RegisterStepsController::class, 'checkSMS'])
        ->name('4')
        ->middleware('register_step:4');
    Route::post('step/4', [RegisterStepsController::class, 'checkSMS'])
        ->middleware('register_step:4');
});

Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/login', ' Auth\LoginController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::view('/cabinet', 'pages.personal-area')->name('lk');
    Route::view('/table', 'pages.user-table');
});



