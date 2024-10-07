<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\RegionController;

// Eliminar el prefijo 'v1' aquí ya que se está aplicando en RouteServiceProvider.
Route::apiResource('regions', RegionController::class)->names('api.v1.regions');
Route::apiResource('companies', CompanyController::class)->names('api.v1.companies');
Route::apiResource('users', UserController::class)->names('api.v1.users');






