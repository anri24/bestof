<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(PropertyController::class)->group(function (){
    Route::get('properties/all','index');
    Route::get('property/{id}','show');
    Route::post('property/store','store');
    Route::patch('property/update/{id}','update');
    Route::delete('property/delete/{id}','delete');
});
