<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('index');
// });
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);