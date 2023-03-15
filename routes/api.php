<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum', 'ability:workrequest:save'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->group(function () {
    Route::get('/', [\App\Http\Controllers\UserController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\UserController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\UserController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\UserController::class,'delete']);
    Route::post('/login', [\App\Http\Controllers\UserController::class,'login']);
    Route::middleware(['auth:api'])->get('/refresh-token', [\App\Http\Controllers\UserController::class,'refresh_token']);
});

Route::prefix('work-type')->group(function () {
    Route::get('/', [\App\Http\Controllers\WorkTypeController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\WorkTypeController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\WorkTypeController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\WorkTypeController::class,'delete']);
});

Route::prefix('urgency')->group(function () {
    Route::get('/', [\App\Http\Controllers\UrgencyController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\UrgencyController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\UrgencyController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\UrgencyController::class,'delete']);
});

Route::prefix('subscription')->group(function () {
    Route::get('/', [\App\Http\Controllers\SubscriptionController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\SubscriptionController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\SubscriptionController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\SubscriptionController::class,'delete']);
});

Route::prefix('status')->group(function () {
    Route::get('/', [\App\Http\Controllers\StatusController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\StatusController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\StatusController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\StatusController::class,'delete']);
});

Route::prefix('work-request')->group(function () {
    Route::get('/', [\App\Http\Controllers\WorkRequestController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\WorkRequestController::class,'show']);
    Route::get('/{id}/edit', [\App\Http\Controllers\WorkRequestController::class,'show_edit']);
    Route::post('/store', [\App\Http\Controllers\WorkRequestController::class,'store']);
    Route::post('/filter', [\App\Http\Controllers\WorkRequestController::class,'filter']);
    Route::post('/delete', [\App\Http\Controllers\WorkRequestController::class,'destroy']);
});

Route::prefix('level-of-impact')->group(function () {
    Route::get('/', [\App\Http\Controllers\LevelOfImpactController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\LevelOfImpactController::class,'show']);
    Route::post('/store', [\App\Http\Controllers\LevelOfImpactController::class,'store']);
    Route::post('/delete', [\App\Http\Controllers\LevelOfImpactController::class,'destroy']);
});

Route::prefix('risk-level')->group(function () {
    Route::get('/', [\App\Http\Controllers\RiskLevelController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\RiskLevelController::class,'show']);
    Route::post('/store', [\App\Http\Controllers\RiskLevelController::class,'store']);
    Route::post('/delete', [\App\Http\Controllers\RiskLevelController::class,'destroy']);
});

Route::prefix('benefit-type')->group(function () {
    Route::get('/', [\App\Http\Controllers\BenefitTypeController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\BenefitTypeController::class,'show']);
    Route::post('/store', [\App\Http\Controllers\BenefitTypeController::class,'store']);
    Route::post('/delete', [\App\Http\Controllers\BenefitTypeController::class,'destroy']);
});

Route::prefix('request-type')->group(function () {
    Route::get('/', [\App\Http\Controllers\RequestTypeController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\RequestTypeController::class,'show']);
    Route::post('/store', [\App\Http\Controllers\RequestTypeController::class,'store']);
    Route::post('/delete', [\App\Http\Controllers\RequestTypeController::class,'destroy']);
});

Route::prefix('priority')->group(function () {
    Route::get('/', [\App\Http\Controllers\PriorityController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\PriorityController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\PriorityController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\PriorityController::class,'delete']);
});

Route::prefix('require-technical-assistance')->group(function () {
    Route::get('/', [\App\Http\Controllers\RequireTechnicalAssistanceController::class,'index']);
    Route::get('/{id}', [\App\Http\Controllers\RequireTechnicalAssistanceController::class,'show']);
    Route::get('/store', [\App\Http\Controllers\RequireTechnicalAssistanceController::class,'store']);
    Route::get('/delete', [\App\Http\Controllers\RequireTechnicalAssistanceController::class,'delete']);
});
