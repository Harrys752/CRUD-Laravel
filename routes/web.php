<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cars',carController::class);
