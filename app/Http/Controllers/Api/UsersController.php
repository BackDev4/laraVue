<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BusinessInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UsersController extends Controller
{
    public function all()
    {
        return User::with('business_info')->paginate(10);
    }

    public static function routes(): void
    {
        Route::group(['prefix' => '/user'], function () {
            Route::get('/', [self::class, 'all']);
        });
    }
}
