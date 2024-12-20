<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('artists', function () {
    return view('artists');
});
Route::get('schedule', function () {
    return view('schedule');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('login', function () {
    return view('login');
});
Route::get('dashboard', function () {
    return view('/admin/pages/dashboard');
});
Route::get('dashboard/lacak', function () {
    return view('/admin/pages/lacak');
});
Route::get('dashboard/jadwal', function () {
    return view('/admin/pages/jadwal');
});
Route::get('dashboard/informasi', function () {
    return view('/admin/pages/informasi');
});
Route::get('dashboard/materi', function () {
    return view('/admin/pages/materi');
});
