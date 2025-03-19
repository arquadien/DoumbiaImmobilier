<?php

use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\AppCotroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppCotroller::class, 'index'])->name('index');


Route::get('/catalogue', [AppCotroller::class, 'catalogue'])->name('catalogue');
Route::get('/actualite', [AppCotroller::class, 'actualite'])->name('actualite');
Route::get('/actualite/lire_plus', [AppCotroller::class, 'lire'])->name('lire');
Route::get('/contact', [AppCotroller::class, 'contact'])->name('contact');
Route::get('/info/propriete/{id}', [AppCotroller::class, 'show'])->name('detail');

Route::get('/admin', [AdminCotroller::class, 'login']);
Route::post('/admin/login', [AdminCotroller::class, 'do_login'])->name('authentification');

Route::middleware(['auth'])->group(function () {
//route protéger 
Route::get('/admin/dashboard', [AdminCotroller::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard/ajouter_un_bien',[AdminCotroller::class, 'ajout'])->name('ajout_bien');
Route::post('/admin/dashboard/enregister_un_bien', [AdminCotroller::class, 'create'])->name('enregistrement');  
Route::get('/logout', [AdminCotroller::class, 'logout'])->name('deconexion');  
});