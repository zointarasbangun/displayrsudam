<?php

namespace App\Http\Controllers;

use App\Models\RunningText;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $texts = RunningText::where('status', true)->pluck('text');
        return view('dashboard.index', compact('texts'));
    }


    public function profilrsudam()
    {
        return view('dashboard.profilrsudam');
    }

    public function layananunggulan()
    {
        return view('dashboard.layananunggulan');
    }

    public function dokterkami()
    {
        $spesialisasis = Spesialis::all();
        // $dokters = Dokter::all();
        return view('dashboard.dokterkami', compact('spesialisasis'));
    }

    public function fasilitasrsudam()
    {
        return view('dashboard.fasilitasrsudam');
    }

    public function pendaftaranonline()
    {
        return view('dashboard.pendaftaranonline');
    }

    public function infodarurat()
    {
        return view('dashboard.infodarurat');
    }

    public function testimoni()
    {
        return view('dashboard.testimoni');
    }

    public function petakontak()
    {
        return view('dashboard.petakontak');
    }

}
