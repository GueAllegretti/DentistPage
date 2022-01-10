<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index'])
->name('index');

Route::get('/about', [PublicController::class, 'about'])->name('about us');

Route::get('/aboutDetail/{id}', [PublicController::class, 'aboutDetail'])->name('doctor');

Route::get('/contact', [PublicController::class, 'contact'])->name('contact'); 

Route::post('/contact/submit', [PublicController::class, 'contactSubmit'])->name('contact-submit'); 

Route::get('/services', [PublicController::class, 'services'])->name('services');

Route::get('/info', [PublicController::class, 'info'])->name('info'); 

Route::post('/info/submit', [PublicController::class, 'infoSubmit'])->name('info-submit'); 