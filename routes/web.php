<?php

use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LacakController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

Route::prefix('usermanagement')->group(function () {
    Route::get('kelola', [UserManagementController::class, 'kelola'])->name('kelola');
    Route::get('tambah_kelola', [UserManagementController::class, 'tambah_kelola'])->name('tambah_kelola');
    Route::get('edit_kelola/{id}', [UserManagementController::class, 'edit_kelola'])->name('edit_kelola');

    Route::post('_kelola', [UserManagementController::class, '_kelola'])->name('_kelola');
    Route::post('_tambah_kelola', [UserManagementController::class, '_tambah_kelola'])->name('_tambah_kelola');
    Route::post('_edit_kelola', [UserManagementController::class, '_edit_kelola'])->name('_edit_kelola');
    Route::post('_role', [UserManagementController::class, '_role']);

    Route::delete('_delete_kelola/{id}', [UserManagementController::class, '_delete_kelola'])->name('_delete_kelola');
});
Route::prefix('jadwal')->group(function () {
    Route::get('list_jadwal', [JadwalController::class, 'list_jadwal'])->name('list_jadwal');
    Route::get('tambah_jadwal', [JadwalController::class, 'tambah_jadwal'])->name('tambah_jadwal');
    Route::get('edit_jadwal/{id}', [JadwalController::class, 'edit_jadwal'])->name('edit_jadwal');

    Route::post('_list_jadwal', [JadwalController::class, '_list_jadwal'])->name('_list_jadwal');
    Route::post('_tambah_jadwal', [JadwalController::class, '_tambah_jadwal'])->name('_tambah_jadwal');
    Route::post('_edit_jadwal', [JadwalController::class, '_edit_jadwal'])->name('_edit_jadwal');
    Route::post('_dosen', [JadwalController::class, '_dosen']);

    Route::delete('_delete_jadwal/{id}', [JadwalController::class, '_delete_jadwal'])->name('_delete_jadwal');
});
Route::prefix('informasi')->group(function () {
    Route::get('list_info', [InformasiController::class, 'list_info'])->name('list_info');
    Route::get('tambah_info', [InformasiController::class, 'tambah_info'])->name('tambah_info');
    Route::get('edit_info/{id}', [InformasiController::class, 'edit_info'])->name('edit_info');

    Route::post('_list_info', [InformasiController::class, '_list_info'])->name('_list_info');
    Route::post('_tambah_info', [InformasiController::class, '_tambah_info'])->name('_tambah_info');
    Route::post('_edit_info', [InformasiController::class, '_edit_info'])->name('_edit_info');

    Route::delete('_delete_info/{id}', [InformasiController::class, '_delete_info'])->name('_delete_info');
});
Route::prefix('materi')->group(function () {
    Route::get('list_materi', [MateriController::class, 'list_materi'])->name('list_materi');
    Route::get('tambah_materi', [MateriController::class, 'tambah_materi'])->name('tambah_materi');
    Route::get('edit_materi/{id}', [MateriController::class, 'edit_materi'])->name('edit_materi');

    Route::post('_list_materi', [MateriController::class, '_list_materi'])->name('_list_materi');
    Route::post('_tambah_materi', [MateriController::class, '_tambah_materi'])->name('_tambah_materi');
    Route::post('_edit_materi', [MateriController::class, '_edit_materi'])->name('_edit_materi');

    Route::delete('_delete_materi/{id}', [MateriController::class, '_delete_materi'])->name('_delete_materi');
});
Route::prefix('lacak')->group(function () {
    Route::get('list_lacak', [LacakController::class, 'list_lacak'])->name('list_lacak');
    Route::get('tambah_lacak', [LacakController::class, 'tambah_lacak'])->name('tambah_lacak');
    Route::get('edit_lacak/{id}', [LacakController::class, 'edit_lacak'])->name('edit_lacak');

    Route::post('_list_lacak', [LacakController::class, '_list_lacak'])->name('_list_lacak');
    Route::post('_tambah_lacak', [LacakController::class, '_tambah_lacak'])->name('_tambah_lacak');
    Route::post('_edit_lacak', [LacakController::class, '_edit_lacak'])->name('_edit_lacak');

    Route::delete('_delete_lacak/{id}', [LacakController::class, '_delete_lacak'])->name('_delete_lacak');
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
// Route::get('dashboard/jadwal', function () {
//     return view('/admin/pages/jadwal');
// });
// Route::get('dashboard/jadwal/form_jadwal', function () {
//     return view('/admin/pages/form_jadwal');
// });
// Route::get('dashboard/informasi', function () {
//     return view('/admin/pages/informasi');
// });
// Route::get('dashboard/informasi/form_info', function () {
//     return view('/admin/pages/form_info');
// });
// Route::get('dashboard/materi', function () {
//     return view('/admin/pages/materi');
// });
// Route::get('dashboard/materi/form_materi', function () {
//     return view('/admin/pages/form_materi');
// });
// Route::get('dashboard/kelola', function () {
//     return view('/admin/pages/kelola');
// });
// Route::get('dashboard/kelola/form_kelola', function () {
//     return view('/admin/pages/form_kelola');
// });
