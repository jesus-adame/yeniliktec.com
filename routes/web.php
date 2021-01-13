<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', WelcomeController::class)->name('welcome');

// Route::get('/servicios', ServicesController::class)->name('services');

Route::get('/blog', BlogController::class)->name('blog');

Route::get('/contacto', ContactController::class)->name('contact');

Route::post('/sendmail', [ ContactController::class, 'sendMail' ])->name('send.contact.mail');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/marketing-digital', [ ServicesController::class, 'marketing' ])->name('marketing');

Route::get('/sitios-web', [ ServicesController::class, 'websites' ])->name('websites');