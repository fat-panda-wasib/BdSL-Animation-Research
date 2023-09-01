<?php

use App\Http\Controllers\AlphabetController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DigitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\WordController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/digit', [DigitController::class, 'index'])->name('digit');
Route::get('/alphabet', [AlphabetController::class, 'index'])->name('alphabet');
Route::get('/word', [WordController::class, 'index'])->name('word');
Route::get('/publications', [PublicationController::class, 'index'])->name('publications');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');
