<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

// Ressource Routes
Route::resource('jobListings', JobListingController::class);
Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);


