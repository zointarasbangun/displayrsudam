<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Session;
use Validator;

class AccountController extends Controller
{
    public function kelolaakun()
    {
        $users = User::all();

        return view('backend.account.kelolaakun', compact('users'));
    }

    public function storeakun(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'pin' => 'required|min:6',
            'role' => 'nullable',
        ]);
        $validatedData = $validator->validated();

        if ($validator->fails()) {
            $errors = $validator->errors()->toJson();
            return redirect()->back()->with('errors', $errors)->withInput();
        }

        $userData = [
            'email' => $validatedData['email'],
            'name' => $validatedData['name'],
            'pin' => Hash::make($validatedData['pin']),
            'role' => $validatedData['role'] ?? null,
        ];

        // Membuat pengguna baru
        $user = User::create($userData);

        // Redirect ke halaman dataAkun setelah penyimpanan berhasil
        return redirect()->route('superadmin.kelolaakun')->with('success', 'Akun berhasil ditambahkan.');
    }
    public function updateakun(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'pin' => 'nullable|min:6',
            'role' => 'nullable',
        ]);

        $user = User::findOrFail($id);

        if (empty($request->pin)) {
            unset($validatedData['pin']);
        }

        // Update data pengguna
        $user->update($validatedData);

        // Jika ada perubahan pada pin, hash dan simpan
        if ($request->pin) {
            $user->pin = Hash::make($request->pin);
            $user->save();
        }
        Session::flash('dataAkunMessage', 'Data akun tidak ada yang diubah.');
        // dd($request->all());

        return redirect()->route('superadmin.kelolaakun')->with('success', 'Data pengguna diperbarui.');
    }

    public function destroyakun(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect()->route('superadmin.kelolaakun')->with('success', 'Akun berhasil dihapus.');
    }
}