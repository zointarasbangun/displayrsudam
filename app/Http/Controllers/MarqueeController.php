<?php

namespace App\Http\Controllers;

use App\Models\RunningText;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    public function runningtext()
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

    public function update(Request $request, RunningText $runningtext)
    {
        $request->validate([
            'text' => 'required|string|max:255',
            'status' => 'required|boolean'
        ]);

        $runningtext->update($request->all());

        return redirect()->route('runningtext.index')->with('message', 'Teks berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $runningtext = RunningText::findOrFail($id);
        $runningtext->delete();
        
        return redirect()->route('runningtext.index')->with('message', 'Teks berhasil dihapus');
    }
}
