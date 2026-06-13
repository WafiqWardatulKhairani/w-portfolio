<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\AboutController\AboutController;
use App\Http\Controllers\ContactController\ContactController;

//Route::get('/', function () {
  //  return view('home');
//});

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

