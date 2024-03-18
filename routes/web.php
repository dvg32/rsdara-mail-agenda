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
    route::get('/admin_index', 'index')->name('admin_index')->middleware('auth','AppAdminAuth');
    route::get('/user_management', 'user_management')->name('user_management')->middleware('auth','AppAdminAuth');
    route::get('/employee_management', 'employee_management')->name('employee_management')->middleware('auth','AppAdminAuth');
    route::post('/addEmployee','addEmployee')->name('addEmployee')->middleware('auth','AppAdminAuth');
    route::get('/searchEmployeeUsername/{id}','searchEmployeeUsername')->name('searchEmployeeUsername')->middleware('auth','AppAdminAuth');
    route::put('/addUsername','addUsername')->name('addUsername')->middleware('auth','AppAdminAuth');
});

Route::controller(HospitalProfileController::class)->group(function(){
    route::get('/','index')->name('dashboard')->middleware('auth');
    route::get('/supervisorIndex','supervisorIndex')->name('supervisorIndex')->middleware('auth');
    route::get('/incomingMail', 'incomingMail')->name('incomingMail')->middleware('auth');
    route::get('/outgoingMail', 'outgoingMail')->name('outgoingMail')->middleware('auth');
    route::get('/mail-data', 'getMonthlyData')->name('mail-data')->middleware('auth','AppUserAuth');
    route::post('/addJuknis','addJuknis')->name('addJuknis')->middleware('auth','AppSupervisorUserAuth');
});

Route::controller(report::class)->group(function(){
    route::get('/data-graph', 'dataGraph')->name('data-graph')->middleware('auth');
});

Route::controller(MailController::class)->group(function(){
    route::post('/input-mail', 'store')->name('input-mail')->middleware('auth');
    route::get('/mail-data', 'getMonthlyData')->name('mail-data')->middleware('auth');
    route::get('/PetunjukTeknis','viewJuknis');
});

route::controller(report::class)->group(function(){
    route::get('/Report','index')->middleware('auth');
});

route::controller(ReferenceController::class)->group(function(){
    route::get('/Reference','index')->name('Reference')->middleware('auth');
    route::get('/mail-guide','panduanSurat')->name('mail-guide')->middleware('auth');
    route::get('/dataPanduanSuratTataNaskahDinas','dataPanduanSuratTataNaskahDinas')->name('dataPanduanSuratTataNaskahDinas')->middleware('auth');
    route::get('/dataPanduanSuratPermendagri83Tahun2022','dataPanduanSuratPermendagri83Tahun2022')->name('dataPanduanSuratPermendagri83Tahun2022')->middleware('auth');
    route::get('/dataPanduanSuratPerbupNo14Tahun2018','dataPanduanSuratPerbupNo14Tahun2018')->name('dataPanduanSuratPerbupNo14Tahun2018')->middleware('auth');
});

route::controller(AuthController::class)->group(function(){
    route::get('/login', 'Login')->name('login');
    route::post('/authentication', 'authentication')->name('authentication');
    route::post('/logout', 'Logout')->name('logout')->middleware('auth');
});
