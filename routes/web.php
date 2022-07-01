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

Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contact/create', [ContactController::class, 'create'])->name('contacts.store');
Route::post('/contact/thanks', [ContactController::class, 'store'])->name('contacts.thanks');
Route::get('/contact/thanks', [ContactController::class, 'show'])->name('contacts.thanks');


