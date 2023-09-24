<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PromotionController;

/*
|-------------------------------------------------------g-------------------
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
Route::get('/student/create', [EtudiantController::class, 'create'])->name('student.create');
Route::post('/student/store', [EtudiantController::class, 'store'])->name('student.store');
Route::get('/livre', [EtudiantController::class, 'livre'])->name('livre');
Route::get('/section/create', [SectionController::class, 'create'])->name('section.create');
Route::get('/option/create', [OptionController::class, 'create'])->name('option.create');
Route::post('/option/store', [OptionController::class, 'store'])->name('option.store');
Route::post('/section/store', [SectionController::class, 'store'])->name('section.store');
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  //student
    Route::get('/student/all', [EtudiantController::class, 'index'])->name('student');
    Route::get('/student/publication', [EtudiantController::class, 'publication_page'])->name('student.publication.page');
    Route::post('/student/publication', [EtudiantController::class, 'publication'])->name('student.publication');
    Route::get('/student/detail/{id}', [EtudiantController::class, 'detail'])->name('student.detail');
  //demande
    Route::post('/student/demande/publication', [DemandeController::class, 'demandePublication'])->name('demande.publication');
    Route::get('/admin/demande/', [DemandeController::class, 'main_page'])->name('demande');
    Route::get('/admin/demande/', [DemandeController::class, 'demandeBySection'])->name('demande.section');
    Route::get('/admin/demande/section/{id_section}/promotion/{id_promotion}', [DemandeController::class, 
    'demandeBySectionAndPromotion'])->name('demande.section.promotion');
    Route::post('/admin/demande/section/{id_section}/promotion/{id_promotion}', [DemandeController::class,
     'approuverDemande'])->name('demande.section.promotion.student');
  //prof
    Route::get('/prof/all', [ProfController::class, 'index'])->name('prof');
    Route::get('/prof/create', [ProfController::class, 'create'])->name('prof.create');
    Route::post('/prof/store', [ProfController::class, 'store'])->name('prof.store');
    Route::post('/prof/promotion', [ProfController::class, 'promotio_prof_create'])->name('prof.promotion');
  //role
    Route::get('/role/all', [RoleController::class, 'index'])->name('role');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RoleController::class, 'store'])->name('role.store');
    Route::post('/role/attribution', [RoleController::class, 'attribution_page'])->name('role.attribution_page');
  //section
    Route::get('/section/all', [SectionController::class, 'index'])->name('section');
    Route::get('/bibliotheque/all', [SectionController::class, 'page'])->name('section.all');

   
  //grade
    Route::get('/grade/all', [GradeController::class, 'index'])->name('grade');
    Route::get('/grade/create', [GradeController::class, 'create'])->name('grade.create');
    Route::post('/grade/store', [GradeController::class, 'store'])->name('grade.store');
  //promotion
    Route::get('/promotion/all', [PromotionController::class, 'index'])->name('promotion');
    Route::get('/promotion/create', [PromotionController::class, 'create'])->name('promotion.create');
    Route::post('/promotion/store', [PromotionController::class, 'store'])->name('promotion.store');
  //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
