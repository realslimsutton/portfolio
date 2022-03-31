<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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

Route::middleware('page-cache')->group(function () {
    Route::get('/', [Controller::class, 'index'])->name('home');
    Route::get('/about', [Controller::class, 'about'])->name('about');
});

Route::middleware(ProtectAgainstSpam::class)->group(function () {
    Route::get('/contact', [Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Controller::class, 'message']);
});
