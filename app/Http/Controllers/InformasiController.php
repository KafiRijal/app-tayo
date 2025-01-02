<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InformasiController extends Controller
{
    public function list_info()
    {
        return view('/admin/pages/informasi');
    }

    public function tambah_info()
    {
        return view('/admin/pages/form_info');
    }

    public function _list_info()
    {
        $info = Informasi::all();

        $data = [
            "data" => $info
        ];
        return response()->json($data);
    }

    public function edit_info($id)
    {
        $info = Informasi::findOrFail($id);

        $data = [
            'info' => $info
        ];
        return view('/admin/pages/edit_info', $data);
    }

    public function _tambah_info(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'htm' => 'required|numeric',
            'lokasi' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tambah_info')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        $info = Informasi::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'htm' => $request->htm,
            'lokasi' => $request->lokasi,
            'image' => $imageName,
        ]);

        return redirect()->route('list_info')->with('success', 'Create successfully');
    }

    public function _edit_info(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'htm' => 'required|numeric',
            'lokasi' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit_info', ['id' => $request->id])->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $info = Informasi::findOrFail($request->id);

        if ($request->hasFile('image')) {
            if ($info->image && file_exists(public_path('images/' . $info->image))) {
                unlink(public_path('images/' . $info->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = $info->image;
        }

        // Update data
        $info->nama = $request->nama;
        $info->tanggal = $request->tanggal;
        $info->htm = $request->htm;
        $info->lokasi = $request->lokasi;
        $info->image = $request->image;

        // Simpan perubahan
        $info->save();

        return redirect()->route('list_info')->with('success', 'Updated successfully.');
    }

    public function _delete_info(string $id)
    {
        try {
            $info = Informasi::findOrFail($id);
            $info->delete();

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
