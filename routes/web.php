<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/why-us', [LandingPageController::class, 'whyus'])->name('landing.whyus');
Route::get('/testimonials', [LandingPageController::class, 'testimonials'])->name('landing.testimonials');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('landing.contact');
