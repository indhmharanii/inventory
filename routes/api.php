<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

Route::apiResource('items', ItemController::class);
Route::apiResource('categories', CategoryController::class);
Route::prefix('v1')->group(function () {

Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');

Route::middleware('auth:sanctum')->group(function () {

        // Categories
        Route::apiResource('categories',
            'App\Http\Controllers\CategoryController')
            ->except(['destroy']);

        Route::delete('categories/{category}',
            'App\Http\Controllers\CategoryController@destroy')
            ->middleware('role:admin');

        // Items
        Route::apiResource('items',
            'App\Http\Controllers\ItemController')
            ->except(['destroy']);

        Route::delete('items/{item}',
            'App\Http\Controllers\ItemController@destroy')
            ->middleware('role:admin');
    });
});