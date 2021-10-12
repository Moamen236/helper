<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\PlanTypeController;
use App\Http\Controllers\Api\QuesCatController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\QuesTypeController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\SpecialistController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('quesTypes', [QuesTypeController::class, 'index']);
Route::get('quesTypes/{id}', [QuesTypeController::class, 'show']);

Route::get('quesCats', [QuesCatController::class, 'index']);
Route::get('quesCats/{quesCat}', [QuesCatController::class, 'show']);

Route::get('questions', [QuestionController::class, 'index']);
Route::get('questions/{question}', [QuestionController::class, 'show']);

Route::get('plan', [QuestionController::class, 'index']);
Route::get('plan/{id}', [QuestionController::class, 'show']);

Route::get('planTypes', [PlanTypeController::class, 'index']);
Route::get('planTypes/{id}', [PlanTypeController::class, 'show']);

Route::get('schedules', [ScheduleController::class, 'index']);
Route::get('schedules/{id}', [ScheduleController::class, 'show']);

Route::get('patients', [PatientController::class, 'index']);
Route::get('patients/{id}', [PatientController::class, 'show']);

Route::get('specialists', [SpecialistController::class, 'index']);
Route::get('specialists/{id}', [SpecialistController::class, 'show']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);