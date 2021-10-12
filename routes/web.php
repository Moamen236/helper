<?php

use App\Http\Controllers\Language\LangController;
use App\Http\Controllers\web\PatientContoller;
use App\Http\Controllers\web\DiagnosisController;
use App\Http\Controllers\web\PlanController;
use App\Http\Controllers\web\ScheduleController;
use App\Http\Controllers\web\specialist\HomeController;
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

// Home page
Route::get('/', function () {
    return view('home.index');
});

Route::middleware('lang')->group(function () {
    // Specialist
    Route::get('/specialist/home', [HomeController::class, 'index']); // Home
    Route::get('/specialist/schedule', [ScheduleController::class, 'index']); // Schedule
    Route::get('/specialist/full_calendar', [ScheduleController::class, 'full_calendar']); // full calendar
    Route::get('/specialist/patients', [PatientContoller::class, 'view_patients']); // get all Patients
    Route::get('/specialist/patient/{id}', [PatientContoller::class, 'view_patient']); // get one patient
    Route::get('/specialist/patient/{id}/diagnosis', [DiagnosisController::class, 'index']); // got to Diagnosis
    Route::get('/specialist/patient/{id}/plan', [PlanController::class, 'index']); // got to Plan
});



// Language
Route::get('lang/set/{lang}', [LangController::class, 'set']);