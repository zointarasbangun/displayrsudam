<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter()
    {
        // $dokters = Dokter::all();
        return view('dokter');
    }
}