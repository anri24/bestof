<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(PropertyController::class)->group(function (){
    Route::get('property/all','index');
    Route::get('property/{id}','show');
    Route::post('property/store','store');
    Route::get('property/edit/{id}','edit');
    Route::patch('property/update/{id}','update');
    Route::delete('property/delete/{id}','delete');
});

Route::controller(CityController::class)->group(function (){
    Route::get('city/all','index');
    Route::post('city/store','store');
    Route::get('city/edit/{id}','edit');
    Route::patch('city/update/{id}','update');
    Route::delete('city/delete/{id}','delete');

});
