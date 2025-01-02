<?php

namespace App\Http\Controllers;

use App\Models\Lacak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LacakController extends Controller
{
    public function list_lacak()
    {
        return view('/admin/pages/lacak');
    }

    public function tambah_lacak()
    {
        return view('/admin/pages/form_lacak');
    }

    public function _list_lacak()
    {
        $lacak = Lacak::all();

        $data = [
            "data" => $lacak
        ];
        return response()->json($data);
    }

    public function edit_lacak($id)
    {
        $lacak = Lacak::findOrFail($id);

        $data = [
            'lacak' => $lacak
        ];
        return view('/admin/pages/edit_lacak', $data);
    }

    public function _tambah_lacak(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tambah_lacak')->withErrors($validator)->withInput();
        }

        $lacak = Lacak::create([
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('list_lacak')->with('success', 'Create successfully');
    }

    public function _edit_lacak(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'deskripsi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit_lacak', ['id' => $request->id])->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $lacak = Lacak::findOrFail($request->id);

        // Update data
        $lacak->deskripsi = $request->deskripsi;

        // Simpan perubahan
        $lacak->save();

        return redirect()->route('list_lacak')->with('success', 'Updated successfully.');
    }

    public function _delete_lacak(string $id)
    {
        try {
            $lacak = Lacak::findOrFail($id);
            $lacak->delete();

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
