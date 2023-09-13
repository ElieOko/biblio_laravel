<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\EtudiantController;

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
    return view('index');
});

Route::get('/inscription', [InscriptionController::class, 'showForm'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'register']);
Route::resource('prof', ProfController::class);
Route::resource('etudiants', EtudiantController::class);

