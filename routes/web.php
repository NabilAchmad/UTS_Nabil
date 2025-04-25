<?php

use App\Http\Controllers\Api\MovieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiServiceController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('api/movies', [MovieController::class, 'getMovie']);