<?php

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

Route::get('/{city?}',[App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('date/datenschutz/{city?}',[App\Http\Controllers\UserController::class, 'datenschutz'])->name('datenschutz');
Route::get('imp/impressum/{city?}',[App\Http\Controllers\UserController::class, 'impressum'])->name('impressum');
Route::get('/anfrage/index/{city?}',[App\Http\Controllers\InquiryController::class, 'anfrage'])->name('inquiry');
Route::post('/anfrage_store',[App\Http\Controllers\InquiryController::class, 'store'])->name('inquiry.store');
Route::get('anfrage/anfrage_confirmation/{city?}',[App\Http\Controllers\InquiryController::class, 'show'])->name('inquiry.confirm');