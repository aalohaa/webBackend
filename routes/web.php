<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/Information', function () {
    return view('Information');
});
Route::get('/main menu', function () {
    return view('main menu');
});
Route::get('/main page', function () {
    return view('main page');
});
Route::get('/sign in', [MainController::class,'login'])->name('login');
Route::get('/login', [MainController::class,'register'])->name('register');
Route::post('/save', [MainController::class, 'save'])->name('save');

