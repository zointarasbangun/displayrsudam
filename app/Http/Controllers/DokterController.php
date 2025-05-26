<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use Storage;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('spesialis')->get(); // Eager load spesialisasi
        $spesialisasis = Spesialis::all();

        return view('backend.dokter.index', compact('dokters', 'spesialisasis'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $validated = $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'tipe_dokter' => 'required|in:umum,spesialis',
            'spesialis_id' => 'nullable|required_if:tipe_dokter,spesialis|exists:spesialis,id',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,deactive',
        ]);

        // Debug isi data yang sudah divalidasi
        // dd($validated);

        // Upload foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('dokter', 'public');
            $validated['foto'] = $path;
        }

        if ($validated['tipe_dokter'] === 'umum') {
            $validated['spesialis_id'] = null;
        }

        Dokter::create($validated);


        return redirect()->route('superadmin.dokter.index')->with('success', 'Dokter berhasil ditambahkan!');
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());

        $validated = $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'tipe_dokter' => 'required|in:umum,spesialis',
            'spesialis_id' => 'nullable|required_if:tipe_dokter,spesialis|exists:spesialis,id',
            'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,deactive',
        ]);

        $dokter = Dokter::findOrFail($id);

        // Update foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($dokter->foto && Storage::exists('public/' . $dokter->foto)) {
                Storage::delete('public/' . $dokter->foto);
            }
            $path = $request->file('foto')->store('dokter', 'public');
            $validated['foto'] = $path;
        }

        $dokter->update($validated);

        return redirect()->route('superadmin.dokter.index')->with('success', 'Dokter berhasil diperbaharui!');
    }

    public function show($id)
    {
        $dokter = Dokter::with('spesialisasi')->findOrFail($id);
        return response()->json($dokter);
    }
    public function destroy(String $id)
    {
        $dokter = Dokter::findOrFail($id);

        // Hapus foto jika ada
        if ($dokter->foto && Storage::exists('public/' . $dokter->foto)) {
            Storage::delete('public/' . $dokter->foto);
        }

        $dokter->delete();

        return redirect()->route('superadmin.dokter.index')
            ->with('success', 'Dokter berhasil dihapus!');
    }
}
