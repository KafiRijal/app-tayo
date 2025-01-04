<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Pastikan waktu sekarang mengikuti zona waktu Asia/Jakarta
        $today = Carbon::now('Asia/Jakarta')->format('Y-m-d');

        // Mengambil data jadwal dengan tanggal sama dengan hari ini
        $jadwal = Jadwal::where('tanggal', $today)->get();
        if ($jadwal->isEmpty()) {
            $jadwal = null;
        }

        $data = [
            "data" => $jadwal
        ];
        return view('admin.pages.dashboard', $data);
    }
}
