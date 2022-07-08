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
    Route::get('step/1', [RegisterStepsController::class, 'registerForm'])->name('1');
    Route::post('step/1', [RegisterStepsController::class, 'registerForm']);

    Route::get('step/2', [RegisterStepsController::class, 'businessForm'])->name('2');
    Route::post('step/2', [RegisterStepsController::class, 'businessForm']);

    Route::get('step/3', [RegisterStepsController::class, 'checkInputData'])->name('3');
    Route::post('step/3', [RegisterStepsController::class, 'checkInputData']);

    Route::get('step/4', [RegisterStepsController::class, 'checkSMS'])->name('4');
    Route::post('step/4', [RegisterStepsController::class, 'checkSMS']);
});

Route::get('/cabinet', function () {
    return view('pages.personal-area');
});

Route::get('/user-table', function () {
    return view('pages.user-table');
});

Auth::routes();
