<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AgencyMasterController;
use App\Http\Controllers\Api\EventMasterController;
use App\Http\Controllers\Api\PMFCTEventsController;
// use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\LoginController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('index', [AgencyMasterController::class, 'index']);
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/register', [LoginController::class, 'register']);

Route::get('/index', [AgencyMasterController::class, 'index']);
Route::post('/store', [AgencyMasterController::class, 'store']);
Route::get('/view', [AgencyMasterController::class, 'view']);
Route::put('/update-agency', [AgencyMasterController::class, 'update']);
// Route::patch('/update-agency', [AgencyMasterController::class, 'update']);
Route::delete('/delete-agency', [AgencyMasterController::class, 'delete']);

Route::get('/event-master-index', [EventMasterController::class, 'index']);
Route::post('/event-master-store', [EventMasterController::class, 'store']);
Route::get('/event-master-view', [EventMasterController::class, 'view']);
Route::put('/update-event-master', [EventMasterController::class, 'update']);

Route::get('/pmfct-events-index', [PMFCTEventsController::class, 'index']);
Route::post('/pmfct-events-store', [PMFCTEventsController::class, 'store']);
Route::get('/pmfct-events-view', [PMFCTEventsController::class, 'view']);
Route::put('/update-pmfct-event-master', [PMFCTEventsController::class, 'update']);


