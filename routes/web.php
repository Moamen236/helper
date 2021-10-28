<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Language\LangController;
use App\Http\Controllers\web\PatientsController;
use App\Http\Controllers\web\DiagnosisController;
use App\Http\Controllers\web\PatientController;
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
    //--- Specialist Middleware ---//
    Route::prefix('specialist')->middleware('specialist')->group(function () {
        Route::get('/home', [HomeController::class, 'index']); // Home Page
        Route::group(['middleware' => ['auth', 'verified']], function () {
            Route::get('schedule', [ScheduleController::class, 'index']); // Schedule
            Route::get('/full_calendar', [ScheduleController::class, 'full_calendar']); // full calendar
            //--- All Patients ---//
            Route::prefix('patients')->group(function () {
                Route::get('/', [PatientsController::class, 'index']);
                Route::post('/store', [PatientsController::class, 'store']);
                Route::post('/update', [PatientsController::class, 'update']);
                Route::get('/delete/{patient}', [PatientsController::class, 'delete']);
            });
            //--- Patient Profile ---//
            Route::prefix('patient')->group(function () {
                Route::get('/{id}', [PatientController::class, 'index']);
                Route::get('/delete/{patient}', [PatientController::class, 'delete']);
                //--- Missions ---//
                Route::prefix('mission')->group(function () {
                    Route::post('/store_mission', [PatientController::class, 'add_mission']);
                    Route::post('/update_mission', [PatientController::class, 'update_mission']);
                    Route::get('/delete_mission/{mission}', [PatientController::class, 'delete_mission']);
                });
                //--- Sessions ---//
                Route::prefix('session')->group(function () {
                    Route::post('/store_session', [PatientController::class, 'add_session']);
                    Route::post('/update_session', [PatientController::class, 'update_session']);
                    Route::get('/delete_session/{session}', [PatientController::class, 'delete_session']);
                });

                //--- Diagnosis ---//
                Route::get('/{id}/diagnosis', [DiagnosisController::class, 'index']); // got to Diagnosis
                Route::prefix('diagnosis')->group(function () {
                    Route::post('/questions/store', [DiagnosisController::class, 'store_questions']);
                    // Route::post('/adir/store', [DiagnosisController::class, 'store_adir']);
                });
                //--- Plan ---//
                Route::get('/{id}/plan', [PlanController::class, 'index']); // got to Plan
            });
        });
    });
});

// To Know which user and redirect to different pages
Route::get('/redirects', [AuthController::class, 'index']);
// Language
Route::get('/lang/set/{lang}', [LangController::class, 'set']);