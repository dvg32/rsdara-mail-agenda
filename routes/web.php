<?php

use App\Http\Controllers\AdminController;
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

Route::controller(AdminController::class)->group(function(){
    route::get('/admin_index', 'index')->name('admin_index');
    route::get('/user_management', 'user_management')->name('user_management');
    route::get('/employee_management', 'employee_management')->name('employee_management');
    route::post('/addEmployee','addEmployee')->name('addEmployee');
    route::get('/searchEmployeeUsername/{id}','searchEmployeeUsername')->name('searchEmployeeUsername');
    route::put('/addUsername','addUsername')->name('addUsername');
});

Route::controller(HospitalProfileController::class)->group(function(){
    route::get('/','index');
    route::get('/supervisorIndex','supervisorIndex')->name('supervisorIndex');
    route::get('/incomingMail', 'incomingMail')->name('incomingMail');
    route::get('/outgoingMail', 'outgoingMail')->name('outgoingMail');
    route::get('/mail-data', 'getMonthlyData')->name('mail-data');
});

Route::controller(report::class)->group(function(){
    route::get('/data-graph', 'dataGraph')->name('data-graph');
});

Route::controller(MailController::class)->group(function(){
    route::post('/input-mail', 'store')->name('input-mail');
    route::get('/mail-data', 'getMonthlyData')->name('mail-data');
});

route::controller(report::class)->group(function(){
    route::get('/Report','index');
});

route::controller(ReferenceController::class)->group(function(){
    route::get('/Reference','index')->name('Reference');
    route::get('/mail-guide','panduanSurat')->name('mail-guide');
    // route::get('/mail-guide-data','dataPanduanSurat')->name('mail-guide-data');
    route::get('/dataPanduanSuratTataNaskahDinas','dataPanduanSuratTataNaskahDinas')->name('dataPanduanSuratTataNaskahDinas');
    route::get('/dataPanduanSuratPermendagri83Tahun2022','dataPanduanSuratPermendagri83Tahun2022')->name('dataPanduanSuratPermendagri83Tahun2022');
    route::get('/dataPanduanSuratPerbupNo14Tahun2018','dataPanduanSuratPerbupNo14Tahun2018')->name('dataPanduanSuratPerbupNo14Tahun2018');
});

route::controller(AuthController::class)->group(function(){
    route::get('/login', 'Login')->name('login');
    route::post('/authentication', 'authentication')->name('authentication');
    route::post('/logout', 'Logout')->name('logout');
});
