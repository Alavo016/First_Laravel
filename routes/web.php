<?php

use App\Http\Controllers\Fonction_Controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\EmailVerificationController;

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

Route::get('/', [Fonction_Controller::class, 'Home'])->name('Acceuil');

Route::get('/about', [Fonction_Controller::class, 'About'])->name('About');

Route::get('/contact', [Fonction_Controller::class, 'Contact'])->name('Contact');

Route::get('/Dashbord', [Fonction_Controller::class, 'Dashbord'])->name('Dashbord');

Route::get('/ok', [Fonction_Controller::class, 'ok'])
->middleware('auth')
->name('ok');

Route::get('/logout',[Fonction_Controller::class,'logout'])->name('logout');

Route::post('/email/verify', [EmailVerificationController::class, 'checkEmail'])->name('email.verify');


