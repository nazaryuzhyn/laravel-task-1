<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
})->name('home');

Route::post('/consultation/send', [\App\Http\Controllers\ConsultationController::class, 'sendConsultation']);

Route::get('/vacancy', function () {
	return view('vacancy');
})->name('vacancy');

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/legalization', function () {
    return view('legalization');
})->name('legalization');

Route::get('/notice-board', function () {
    return view('notice-board');
})->name('notice-board');

Route::get('/finance', function () {
    return view('finance');
})->name('finance');

Route::get('/insurance', function () {
    return view('insurance');
})->name('insurance');

# Личный кабинет
Route::get('/user', function () {
    return view('user');
})->name('user');

# Регистрация
Route::post('/signup/employer',
    [\App\Http\Controllers\SignupController::class, 'signupEmployer']
)->name('signup-employer');

Route::post('/signup/agency-employer',
    [\App\Http\Controllers\SignupController::class, 'signupAgencyEmployer']
)->name('signup-agency-employer');

Route::post('/signup/foreigner',
    [\App\Http\Controllers\SignupController::class, 'signupForeigner']
)->name('signup-foreigner');

Route::post('/signup/user',
    [\App\Http\Controllers\SignupController::class, 'signupUser']
)->name('signup-user');

Route::post('/signup/user-firm',
    [\App\Http\Controllers\SignupController::class, 'signupUserFirm']
)->name('signup-user-firm');

# Вход
Route::post('/login',
    [\App\Http\Controllers\LoginController::class, 'authenticate']
)->name('login');

# Выход
Route::get('/logout',
    [\App\Http\Controllers\LoginController::class, 'logout']
)->name('logout');

