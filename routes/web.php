<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalProfileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\report;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// route::controller(User::class)->group(function(){
//     route::get('/login','Login');
// });

Route::controller(HospitalProfileController::class)->group(function(){
    route::get('/','index')->name('dashboard')->middleware((['auth','AppUserAuth']));
    route::get('/supervisorIndex','supervisorIndex')->name('supervisorIndex')->middleware((['auth','AppSupervisorAuth']));
    route::get('/incomingMail', 'incomingMail')->name('incomingMail')->middleware((['auth','AppUserAuth']));
    route::get('/outgoingMail', 'outgoingMail')->name('outgoingMail')->middleware((['auth','AppUserAuth']));
    route::get('/mail-data', 'getMonthlyData')->name('mail-data')->middleware('auth', 'AppUserAuth');
});

Route::controller(report::class)->group(function(){
    route::get('/data-graph', 'dataGraph')->name('data-graph')->middleware('auth', 'AppUserAuth');
});

Route::controller(MailController::class)->group(function(){
    route::post('/input-mail', 'store')->name('input-mail')->middleware((['auth','AppUserAuth']));
    route::get('/mail-data', 'getMonthlyData')->name('mail-data');
});

route::controller(report::class)->group(function(){
    route::get('/Report','index')->middleware((['auth','AppUserAuth']));
});

route::controller(ReferenceController::class)->group(function(){
    route::get('/Reference','index')->middleware((['auth','AppUserAuth']));
    route::get('/mail-guide','panduanSurat')->name('mail-guide')->middleware((['auth','AppSupervisorUserAuth']));
    route::get('/mail-guide-data','dataPanduanSurat')->name('mail-guide-data')->middleware((['auth','AppSupervisorUserAuth']));
});

route::controller(AuthController::class)->group(function(){
    route::get('/login', 'Login')->name('login');
    route::post('/authentication', 'authentication')->name('authentication');
    route::post('/logout', 'Logout')->name('logout')->middleware('auth');
});
