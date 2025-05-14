<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function kelolaakun()
    {
        return view('backend.account.kelolaakun');
    }
}