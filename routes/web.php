<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TermsAndConditionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
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



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/termandconditions', [TermsAndConditionController::class, 'index'])->name('admin.terms');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

//User
Route::get('/user',[UserController::class, 'showuser'])->name('user');
Route::post('/user-add',[UserController::class, 'adduser'])->name('admin.user');
Route::get('/user-list',[UserController::class, 'getbyall'])->name('user-list');

//termsandconditions
Route::get('/termandconditions',[TermsAndConditionController::class, 'showTerm'])->name('termandconditions');
Route::post('/term-add',[TermsAndConditionController::class, 'addterm'])->name('admin.terms');
Route::get('/term-list',[TermsAndConditionController::class, 'getbyall'])->name('term-list');
Route::get('term-edit/{id}',[TermsAndConditionController::class, 'getUser'])->name('term-edit');
Route::put('term-update/{id}',[TermsAndConditionController::class, 'update'])->name('term-update');
Route::delete('term-del/{id}',[TermsAndConditionController::class,'destroy'])->name('term-del');


//Clients
Route::get('/client',[ClientController::class, 'showClients'])->name('client');
Route::post('/client-add',[ClientController::class, 'addclient'])->name('admin.client');
Route::get('/client-list',[ClientController::class, 'getbyall'])->name('client-list');
Route::get('client-edit/{id}',[ClientController::class, 'getUser'])->name('client-edit');
Route::put('client-update/{id}',[ClientController::class, 'update'])->name('client-update');
Route::delete('client-del/{id}',[ClientController::class,'destroy'])->name('client-del');

//Staff
Route::get('/staff',[StaffController::class, 'showstaff'])->name('staff');
Route::post('/staff-add',[StaffController::class, 'addstaff'])->name('admin.staff');
Route::get('/staff-list',[StaffController::class, 'getbyall'])->name('staff-list');
Route::post('/staff/set-active/{id}', [StaffController::class, 'setActiveStatus'])->name('staff.set-active');
Route::get('staff-edit/{id}',[StaffController::class, 'getUser'])->name('staff-edit');
Route::put('staff-update/{id}',[StaffController::class, 'update'])->name('staff-update');
Route::delete('staff-del/{id}',[StaffController::class,'destroy'])->name('staff-del');
