<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/v1')->group(function () {

    // Authentication routes
    Route::group(['prefix' => 'auth'], function () {
        Route::post('/login', [AuthController::class, 'login']);
    });

});
