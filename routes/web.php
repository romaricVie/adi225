<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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



Route::view('/','pages.welcome')->name('welcome');
Route::view('/a-propos', 'pages.about')->name('about');
Route::view('/nous-contacter', 'pages.contact')->name('contact');
Route::view('/expertises', 'pages.expertise')->name('expertise');
Route::post('contact', [ContactController::class,'store'])->name('store.contact');
Route::get('contact/admin/adi_administrator', [ContactController::class,'index'])->name('index.contact');
Route::get('contact/admin/adi_administrator/show/{contact}', [ContactController::class,'show'])->name('show.contact');

Route::delete('contact/admin/adi_administrator/{contact}', [ContactController::class,'destroy'])->name('destroy.contact');

