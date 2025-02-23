<?php

use App\Http\Controllers\CaponeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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





Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', [\App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'contacts'])->name('contacts');
Route::get('/capone', [App\Http\Controllers\CaponeController::class, 'capone'])->name('capone');
Auth::routes();

