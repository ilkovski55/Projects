<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;

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

Route::get('',[WebsiteController::class,'index']);
Route::post('',[WebsiteController::class,'store'])->name('file.store');


Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/aproved', [AdminController::class, 'getApproved'])->middleware(['auth'])->name('aproved');

Route::get('/declined', [AdminController::class, 'getDeclined'])->middleware(['auth'])->name('declined');

Route::get('/awarded', [AdminController::class, 'getAwarded'])->middleware(['auth'])->name('awarded');


require __DIR__.'/auth.php';
