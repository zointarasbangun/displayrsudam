<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Hash;
use Illuminate\Http\Request;
use Session;

class TestiController extends Controller
{

    public function index()
    {
        $testimonis = Testimoni::all();
        return view('backend.testimoni.testimoni', compact('testimonis'));
    }

    public function tambahnama(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
            'media_type' => 'required|in:video,image',
            'video_url' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'message', 'media_type', 'video_url']);

        // Simpan gambar jika media_type = image dan file tersedia
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->isValid()) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('live/assets/img'), $filename);
                $data['image'] = 'live/assets/img/' . $filename;
            }
        }

        Testimoni::create($data);

        return redirect()->route(auth()->user()->role . '.testimoni.index')
            ->with('message', 'Testimoni berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'nullable',
            'status' => 'nullable',
        ]);

        $Testimoni = Testimoni::findOrFail($id);
        $Testimoni->update($validatedData);

        return redirect()->route(auth()->user()->role . '.testimoni.index')
            ->with('success', 'Teks berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $Testimoni = Testimoni::findOrFail($id);
        $Testimoni->delete();

        return redirect()->route(auth()->user()->role . '.testimoni.index')
            ->with('success', 'Teks berhasil dihapus');
    }
}
