<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, "spisakSvi"])->name('pocetna');

Route::get('/zadatak/zavrseni', [TaskController::class, "spisakZavrseni"])->name('zavrseni-zadaci');

Route::get('/zadatak/novi', [TaskController::class, "novi"])->name('novi-zadatak');

