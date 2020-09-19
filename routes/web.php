<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FileController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::get('image', [FileController::class, 'create']); 
Route::post('image', [FileController::class, 'store']);