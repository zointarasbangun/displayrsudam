<?php

namespace App\Http\Controllers;

use App\Models\RunningText;
use Hash;
use Illuminate\Http\Request;
use Session;

class MarqueeController extends Controller
{
    public function runningtext()
    {
        $texts = RunningText::all();
        return view('backend.marquee.marquee', compact('texts'));
    }

    public function adminrunningtext()
    {
        $texts = RunningText::all();
        return view('backend.marquee.marquee', compact('texts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'status' => 'required|boolean'
        ]);

        RunningText::create($request->all());

        return redirect()->route('runningtext.index')->with('message', 'Teks berhasil ditambahkan');
    }

    public function adminstore(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'status' => 'required|boolean'
        ]);

        RunningText::create($request->all());

        return redirect()->route('runningtext.index')->with('message', 'Teks berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'nullable',
            'status' => 'nullable',
        ]);

        $runningtext = RunningText::findOrFail($id);

        $runningtext->update($validatedData);

        $runningtext->save();

        return redirect()->route('runningtext.index')->with('success', 'Teks berhasil diperbarui');
    }

    public function adminupdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'text' => 'nullable',
            'status' => 'nullable',
        ]);

        $runningtext = RunningText::findOrFail($id);

        $runningtext->update($validatedData);

        $runningtext->save();

        return redirect()->route('runningtext.index')->with('success', 'Teks berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $runningtext = RunningText::findOrFail($id);
        $runningtext->delete();

        return redirect()->route('runningtext.index')->with('success', 'Teks berhasil dihapus');
    }

    public function admindestroy(string $id)
    {
        $runningtext = RunningText::findOrFail($id);
        $runningtext->delete();

        return redirect()->route('runningtext.index')->with('success', 'Teks berhasil dihapus');
    }
}