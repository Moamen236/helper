<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuesCatController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\QuesTypeController;

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
Route::get('quesTypes/show/{quesType}', [QuesTypeController::class, 'show']);

Route::get('quesCats', [QuesCatController::class, 'index']);
Route::get('quesCats/show/{quesCat}', [QuesCatController::class, 'show']);

Route::get('questions', [QuestionController::class, 'index']);
Route::get('questions/show/{question}', [QuestionController::class, 'show']);