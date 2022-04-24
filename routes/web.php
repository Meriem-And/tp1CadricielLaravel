<?php

use App\Http\Controllers\EtudiantController;
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
