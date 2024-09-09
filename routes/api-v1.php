<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\RegionController;


//ruta para registrar un nuevo usuario
/* Route::post('register',[RegisterController::class,'store'])->name('api.v1.register');
Route::get('regions',[RegionController::class, 'index'])->name('api.regions.index');
Route::post('regions',[RegionController::class, 'store'])->name('api.regions.store'); */
//ruta con una categoria especifico, espera un parametro en la url
/* Route::get('regions/{region}',[RegionController::class, 'show'])->name('api.regions.show'); */
//ruta para actualizar una region
/* Route::put('regions/{region}',[RegionController::class, 'update'])->name('api.regions.update'); */
//ruta para eliminar una region
/* Route::delete('regions/{region}',[RegionController::class, 'delete'])->name('api.regions.delete'); */


Route::apiResource('regions',RegionController::class)->names('api.v1.regions');



