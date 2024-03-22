<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(PropertyController::class)->group(function (){
    Route::get('property/all','index');
    Route::get('property/{id}','show');

    Route::middleware('auth')->group(function (){
        Route::post('property/store','store');
        Route::get('property/edit/{id}','edit');
        Route::patch('property/update/{id}','update');
        Route::delete('property/delete/{id}','delete');
    });
});

Route::controller(CityController::class)->group(function (){
    Route::get('city/all','index');

    Route::middleware('auth')->group(function (){
        Route::post('city/store','store');
        Route::get('city/edit/{id}','edit');
        Route::patch('city/update/{id}','update');
        Route::delete('city/delete/{id}','delete');
    });
});

Route::controller(WishlistController::class)->middleware('auth:sanctum')->group(function (){
    Route::get('wishlist','index');
    Route::post('wishlist/store/{id}','store');
    Route::delete('wishlist/delete/{id}','delete');
});
