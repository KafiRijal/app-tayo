<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserManagementController extends Controller
{
    public function kelola()
    {
        return view('/admin/pages/kelola');
    }
    public function tambah()
    {
        return view('/admin/pages/form_kelola');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $data = [
            'user' => $user
        ];
        return view('/admin/pages/edit_kelola', $data);
    }

    public function _kelola(Request $request)
    {
        $users = User::with('role')->get();

        $data = [
            "data" => $users->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role ? $user->role->role : '', // Ambil nama role
                ];
            }),
        ];

        return response()->json($data);
    }

    public function _role()
    {
        $role = Role::all();
        return response()->json($role);
    }
    public function _edit(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'role_id' => 'required|integer',
            'password' => [
                'nullable', // Password boleh kosong
                'min:8',
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->route('edit', ['id' => $request->id])->withErrors($validator)->withInput();
        }

        // Cari user berdasarkan ID
        $user = User::findOrFail($request->id);

        // Update data
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;

        // Hanya update password jika diisi
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Simpan perubahan
        $user->save();

        return redirect()->route('kelola')->with('success', 'User updated successfully.');
    }

    public function _tambah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'min:8',
            ],
            'role_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tambah')->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('kelola')->with('success', 'Registration successful. Please login.');
    }

    public function _delete(string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

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
