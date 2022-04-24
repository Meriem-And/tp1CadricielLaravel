<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\LocalizationController;
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

Route::get('/', function () {
    return redirect('/etudiants');
});


Route::get('/etudiants', [EtudiantController::class, 'index']);
Route::get('/etudiants/ajouter', [EtudiantController::class, 'create']);
Route::get('/etudiants/{id}', [EtudiantController::class, 'show']);
Route::post('/etudiants/ajouter', [EtudiantController::class, 'save']);
Route::get('/etudiants/modifier/{id}', [EtudiantController::class, 'update']);
Route::put('/etudiants/modifier', [EtudiantController::class, 'edit']);
Route::get('/etudiants/supprimer/{id}', [EtudiantController::class, 'destroy']);

Route::get('login', [CustomAuthController::class, 'index']);
Route::get('registration', [CustomAuthController::class, 'create']);
Route::post('custom-registration', [CustomAuthController::class, 'store'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('forum', [CustomAuthController::class, 'forum']);
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('/articles',[\App\Http\Controllers\ArticleController::class, 'index'])->middleware('auth');
Route::get('/articles/ajouter',[\App\Http\Controllers\ArticleController::class, 'create'])->middleware('auth');
Route::post('/articles/ajouter',[\App\Http\Controllers\ArticleController::class, 'save'])->middleware('auth');
Route::get('/articles/supprimer/{id}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->middleware('auth');
Route::get('/articles/modifier/{id}', [\App\Http\Controllers\ArticleController::class, 'update'])->middleware('auth');
Route::put('/articles/modifier', [\App\Http\Controllers\ArticleController::class, 'edit'])->middleware('auth');

Route::get('/files', [\App\Http\Controllers\FilesController::class,'index'])->name('files.index');
Route::get('/files/add', [\App\Http\Controllers\FilesController::class,'create'])->name('files.create');
Route::post('/files/add', [\App\Http\Controllers\FilesController::class,'store'])->name('files.store');
Route::get('/files/modifier/{id}', [\App\Http\Controllers\FilesController::class,'update'])->name('files.update');
Route::put('/files/modifier', [\App\Http\Controllers\FilesController::class,'edit'])->name('files.edit');

Route::get('/files/supprimer/{id}', [\App\Http\Controllers\FilesController::class,'destroy']);
Route::get('/files/telecharger/{id}', [\App\Http\Controllers\FilesController::class,'download']);



Route::get('/lang/{locale}', [LocalizationController::class, 'index']);


