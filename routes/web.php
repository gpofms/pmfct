<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\AgencyMasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KPIMasterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-user',[LoginController::class,'postLogin'])->name('login-user');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');


Route::resource('agency-master', AgencyMasterController::class);

Route::get('getEventName', [KPIMasterController::class, 'getEventName'])->name('getEventName');
Route::resource('kpi-master', KPIMasterController::class);


// Route::controller(LoginController::class)->group(function(){
//     Route::get('/login','login')->middleware('alreadyLoggedIn');
//     Route::post('/login-user','loginUser')->name('login-user');
//     Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
//     // Route::get('/logout','logout');
// });
