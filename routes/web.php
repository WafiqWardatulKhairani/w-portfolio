<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\AboutController\AboutController;
use App\Http\Controllers\ContactController\ContactController;
use App\Http\Controllers\ProjectController\ProjectController;

// Admin Area
Route::get('/private/projects', [ProjectController::class, 'index']);
Route::get('/private/projects/create', [ProjectController::class, 'create']);
Route::post('/private/projects', [ProjectController::class, 'store']);
Route::get('/private/projects/{project}', [ProjectController::class, 'edit']);
Route::put('/private/projects/{project}', [ProjectController::class, 'update']);
Route::delete('/private/projects/{project}', [ProjectController::class, 'destroy']);


//Public Area
//Route::get('/', function () {
  //  return view('home');
//});

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

