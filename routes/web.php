<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Language\LangController;
use App\Http\Controllers\web\PatientsContoller;
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
    // Specialist Middleware
    Route::middleware('specialist')->group(function () {
        Route::get('/specialist/home', [HomeController::class, 'index']);                                       // Home
        Route::group(['middleware' => ['auth', 'verified']], function () {
            Route::get('/specialist/schedule', [ScheduleController::class, 'index']);                           // Schedule
            Route::get('/specialist/full_calendar', [ScheduleController::class, 'full_calendar']);              // full calendar
            Route::get('/specialist/patients', [PatientsContoller::class, 'index']);                            // get all Patients
            Route::get('/specialist/patient/{id}', [PatientsContoller::class, 'patient']);                      // get one patient
            Route::get('/specialist/patient/{id}/diagnosis', [DiagnosisController::class, 'index']);            // got to Diagnosis
            Route::get('/specialist/patient/{id}/plan', [PlanController::class, 'index']);                      // got to Plan
            Route::post('/patient/store/', [PatientsContoller::class, 'store']);
            Route::post('/patient/update/', [PatientsContoller::class, 'update']);
            Route::get('/patient/delete/{patient}', [PatientsContoller::class, 'delete']);
        });
    });
});

// To Know which user and redirect to different pages
Route::get('/redirects', [AuthController::class, 'index']);
// Language
Route::get('/lang/set/{lang}', [LangController::class, 'set']);