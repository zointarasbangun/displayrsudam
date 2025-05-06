<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function dokterspesialis()
    {
        return view('dashboard.dokterspesialis');
    }

    public function profilrsudam()
    {
        return view('dashboard.profilrsudam');
    }
}
