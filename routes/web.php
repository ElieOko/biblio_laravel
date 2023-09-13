<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [InscriptionController::class, 'showForm'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'register']);