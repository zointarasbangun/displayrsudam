<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function profilrsudam()
    {
        return view('dashboard.profilrsudam');
    }

    public function layananunggulan()
    {
        return view('dashboard.layananunggulan');
    }

    public function dokterspesialis()
    {
        // $dokters = Dokter::all();
        return view('dashboard.dokter');
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
