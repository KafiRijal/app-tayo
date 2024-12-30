<?php

use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('usermanagement')->group(function () {
    Route::get('kelola', [UserManagementController::class, 'kelola'])->name('kelola');
    Route::get('tambah', [UserManagementController::class, 'tambah'])->name('tambah');
    Route::get('edit/{id}', [UserManagementController::class, 'edit'])->name('edit');

    Route::post('_kelola', [UserManagementController::class, '_kelola'])->name('_kelola');
    Route::post('_tambah', [UserManagementController::class, '_tambah'])->name('_tambah');
    Route::post('_edit', [UserManagementController::class, '_edit'])->name('_edit');
    Route::post('_role', [UserManagementController::class, '_role']);

    Route::delete('_delete/{id}', [UserManagementController::class, '_delete'])->name('_delete');
});

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('_login', [AuthController::class, '_login'])->name('_login');
    Route::post('_logout', [AuthController::class, '_logout']);
});

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
// Route::get('login', function () {
//     return view('login');
// });
Route::get('dashboard', function () {
    return view('/admin/pages/dashboard');
})->name('dashboard');
Route::get('dashboard/lacak', function () {
    return view('/admin/pages/lacak');
});
Route::get('dashboard/lacak/form_lacak', function () {
    return view('/admin/pages/form_lacak');
});
Route::get('dashboard/jadwal', function () {
    return view('/admin/pages/jadwal');
});
Route::get('dashboard/jadwal/form_jadwal', function () {
    return view('/admin/pages/form_jadwal');
});
Route::get('dashboard/informasi', function () {
    return view('/admin/pages/informasi');
});
Route::get('dashboard/informasi/form_info', function () {
    return view('/admin/pages/form_info');
});
Route::get('dashboard/materi', function () {
    return view('/admin/pages/materi');
});
Route::get('dashboard/materi/form_materi', function () {
    return view('/admin/pages/form_materi');
});
// Route::get('dashboard/kelola', function () {
//     return view('/admin/pages/kelola');
// });
// Route::get('dashboard/kelola/form_kelola', function () {
//     return view('/admin/pages/form_kelola');
// });
