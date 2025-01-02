<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MateriController extends Controller
{
    public function list_materi()
    {
        return view('/admin/pages/materi');
    }

    public function tambah_materi()
    {
        return view('/admin/pages/form_materi');
    }

    public function _list_materi()
    {
        $materi = Materi::all();

        $data = [
            "data" => $materi
        ];
        return response()->json($data);
    }

    public function edit_materi($id)
    {
        $materi = Materi::findOrFail($id);

        $data = [
            'materi' => $materi
        ];
        return view('/admin/pages/edit_materi', $data);
    }

    public function _tambah_materi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'topik' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx',
            'video' => 'required|file|mimes:mp4,mov,avi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tambah_materi')->withErrors($validator)->withInput();
        }

        if ($request->hasFile('file')) {
            // Proses file dokumen
            $fileName = time() . '_file.' . $request->file->extension();
            $request->file->move(public_path('files'), $fileName);
        } else {
            $fileName = null;
        }

        if ($request->hasFile('video')) {
            // Proses file video
            $videoName = time() . '_video.' . $request->video->extension();
            $request->video->move(public_path('videos'), $videoName);
        } else {
            $videoName = null;
        }


        $materi = Materi::create([
            'topik' => $request->topik,
            'deskripsi' => $request->deskripsi,
            'file' => $fileName,
            'video' => $videoName,
        ]);

        return redirect()->route('list_materi')->with('success', 'Create successfully');
    }

    public function _edit_materi(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'topik' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|file|mimes:pdf,doc,docx',
            'video' => 'required|file|mimes:mp4,mov,avi',
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit_materi', ['id' => $request->id])->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $materi = Materi::findOrFail($request->id);

        if ($request->hasFile('file')) {
            // Hapus file dokumen lama jika ada
            if ($materi->file && file_exists(public_path('files/' . $materi->file))) {
                unlink(public_path('files/' . $materi->file));
            }

            // Simpan file dokumen baru
            $fileName = time() . '_file.' . $request->file->extension();
            $request->file->move(public_path('files'), $fileName);
        } else {
            $fileName = $materi->file; // Tetap gunakan file lama jika tidak ada unggahan baru
        }

        if ($request->hasFile('video')) {
            // Hapus file video lama jika ada
            if ($materi->video && file_exists(public_path('videos/' . $materi->video))) {
                unlink(public_path('videos/' . $materi->video));
            }

            // Simpan file video baru
            $videoName = time() . '_video.' . $request->video->extension();
            $request->video->move(public_path('videos'), $videoName);
        } else {
            $videoName = $materi->video; // Tetap gunakan video lama jika tidak ada unggahan baru
        }

        // Update data
        $materi->topik = $request->topik;
        $materi->deskripsi = $request->deskripsi;
        $materi->file = $request->file;
        $materi->video = $request->video;

        // Simpan perubahan
        $materi->save();

        return redirect()->route('list_materi')->with('success', 'Updated successfully.');
    }

    public function _delete_materi(string $id)
    {
        try {
            $materi = Materi::findOrFail($id);
            $materi->delete();

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
