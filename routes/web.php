<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/Bio', [PublicController::class, 'Bio'])->name('Bio');
Route::get('/GraficDesign', [PublicController::class, 'GraficDesign'])->name('GraficDesign');
Route::get('/WebDeveloper', [PublicController::class, 'WebDeveloper'])->name('WebDeveloper');