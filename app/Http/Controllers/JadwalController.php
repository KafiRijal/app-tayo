<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function list_jadwal()
    {
        return view('/admin/pages/jadwal');
    }

    public function tambah_jadwal()
    {
        return view('/admin/pages/form_jadwal');
    }

    public function edit_jadwal($id)
    {
        $jadwal_bimbingan = Jadwal::findOrFail($id);

        $data = [
            'jadwal_bimbingan' => $jadwal_bimbingan
        ];
        return view('/admin/pages/edit_jadwal', $data);
    }

    public function _list_jadwal(Request $request)
    {
        $jadwal_bimbingan = Jadwal::with('dosen')->get();

        $data = [
            "data" => $jadwal_bimbingan->map(function ($dosen) {
                return [
                    'id' => $dosen->id,
                    'tanggal' => $dosen->tanggal,
                    'waktu' => $dosen->waktu,
                    'lokasi' => $dosen->lokasi,
                    'dosen' => $dosen->dosen ? $dosen->dosen->dosen : '', // Ambil nama dosen
                ];
            }),
        ];

        return response()->json($data);
    }

    public function _dosen()
    {
        $dosen = Dosen::all();
        return response()->json($dosen);
    }

    public function _tambah_jadwal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required|string|max:255',
            'dosen_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tambah_jadwal')->withErrors($validator)->withInput();
        }

        $jadwal_bimbingan = Jadwal::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'lokasi' => $request->lokasi,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect()->route('list_jadwal')->with('success', 'Create successfully');
    }

    public function _edit_jadwal(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required|string|max:255',
            'dosen_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit_jadwal', ['id' => $request->id])->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $jadwal_bimbingan = Jadwal::findOrFail($request->id);

        // Update data
        $jadwal_bimbingan->tanggal = $request->tanggal;
        $jadwal_bimbingan->waktu = $request->waktu;
        $jadwal_bimbingan->lokasi = $request->lokasi;
        $jadwal_bimbingan->dosen_id = $request->dosen_id;

        // Simpan perubahan
        $jadwal_bimbingan->save();

        return redirect()->route('list_jadwal')->with('success', 'Updated successfully.');
    }

    public function _delete_jadwal(string $id)
    {
        try {
            $jadwal_bimbingan = Jadwal::findOrFail($id);
            $jadwal_bimbingan->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
