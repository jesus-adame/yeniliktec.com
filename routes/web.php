<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/blog', BlogController::class)->name('blog');

Route::get('/contacto', ContactController::class)->name('contact');

Route::post('/sendmail', [ ContactController::class, 'sendMail' ])->name('send.contact.mail');

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::get('/marketing-digital', [ ServicesController::class, 'marketing' ])->name('marketing');

Route::get('/sitios-web', [ ServicesController::class, 'websites' ])->name('websites');

Route::get('/posts/create', [ PostController::class, 'create' ])->name('posts.create');
Route::post('/posts', [ PostController::class, 'store' ])->name('posts.store');
Route::get('/posts/{post}', [ PostController::class, 'show' ])->name('posts.show');
Route::get('/posts/{post}/edit', [ PostController::class, 'edit' ])->name('posts.edit');
Route::put('/posts/{post}', [ PostController::class, 'update' ])->name('posts.update');
Route::delete('/posts/{post}', [ PostController::class, 'destroy' ])->name('posts.destroy');

Route::get('/categorias', [ CategoryController::class, 'render' ])->name('categories.render');
Route::get('/categories', [ CategoryController::class, 'index' ])->name('categories.index');
Route::get('/categories/create', [ CategoryController::class, 'create' ])->name('categories.create');
Route::post('/categories', [ CategoryController::class, 'store' ])->name('categories.store');
Route::get('/categories/{category}', [ CategoryController::class, 'show' ])->name('categories.show');
Route::delete('/categories/{category}', [ CategoryController::class, 'destroy' ])->name('categories.destroy');