<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/zadatak/zavrsi/{id}', [TaskController::class, "zavrsi"])->name('zavrsi-zadatak');

Route::post('/zadatak/dodaj', [TaskController::class, "dodajNovi"])->name('dodaj-zadatak');

Route::get('/zadaci', [TaskController::class, "taskovi"])->name('zadaci-list');