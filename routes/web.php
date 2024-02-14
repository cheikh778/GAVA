<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/home', [PagesController::class, 'home'])->name('index');

/*contact form*/

Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'submitContactForm'])->name('contact.submit');

/*others pages*/
Route::get('/services', [PagesController::class, 'services'])->name('services');
Route::get('/conciergeServices', [PagesController::class, 'conciergeServices'])->name('conciergeServices');
Route::get('/cars', [PagesController::class, 'car'])->name('car');
Route::get('/groundService', [PagesController::class, 'groundService'])->name('groundService');
Route::get('/weatherReport', [PagesController::class, 'weatherReport'])->name('weatherReport');

Route::get('lang/{locale}', [LocalizationController::class, 'setLocale'])->name('lang.switch');
