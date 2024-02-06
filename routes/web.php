<?php

use App\Http\Controllers\HospitalProfileController;
use App\Http\Controllers\IncomingMailController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OutgoingMailController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\report;
use App\Http\Controllers\User;
use App\Models\mail;
use App\Models\reference;
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

route::controller(User::class)->group(function(){
    route::get('/login','Login');
});

Route::controller(HospitalProfileController::class)->group(function(){
    route::get('/','index')->name('dashboard');
    route::get('/incomingMail', 'incomingMail')->name('incomingMail');
});

Route::controller(MailController::class)->group(function(){
    route::post('/input-mail', 'store')->name('input-mail');
});

// route::controller(IncomingMailController::class)->group(function(){
//     route::get('/IncomingMail','index');
// });

// Route::controller(OutgoingMailController::class)->group(function(){
//     route::get('/OutgoingMail','index');
// });

route::controller(report::class)->group(function(){
    route::get('/Report','index');
});

route::controller(ReferenceController::class)->group(function(){
    route::get('/Reference','index');
});
