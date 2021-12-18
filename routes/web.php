<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Language\LangController;
use App\Http\Controllers\web\specialist\HomeController;
use App\Http\Controllers\web\specialist\AllPatientsController;

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

// Home page
Route::get('/', function () {
    return view('home.index');
});

Route::middleware('lang')->group(function () {
    //--- Specialist Middleware ---//
    Route::middleware(['auth', 'specialist'])->group(function () {
        // Home page
        Route::get('/specialist/home', [HomeController::class, 'index'])->name('specialist.home');
        Route::resource('/patients', AllPatientsController::class);
    });
});

// To Know which user and redirect to different pages
Route::get('/redirects', [AuthController::class, 'index']);
// Language
Route::get('/lang/set/{lang}', [LangController::class, 'set']);