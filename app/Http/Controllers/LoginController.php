<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->merge([
            'email' => trim($request->email),
            'pin' => trim($request->pin),
        ]);

        $request->validate([
            'email' => 'required|email',
            'pin' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // dd([
        //     'input_pin' => $request->pin,
        //     'stored_pin' => $user ? $user->pin : 'User not found',
        //     'match' => $user ? Hash::check($request->pin, $user->pin) : 'User not found'
        // ]);

        if ($user && Hash::check($request->pin, $user->pin)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('failed', 'Email atau PIN salah!');
    }


    public function dashboard()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $userId = $user->id;
            $role = $user->role;
            // $data = User::whereNotIn('role', ['superadmin', 'admin'])->get();
            $superadmin = User::where('role', 'superadmin')->get();
            $admin = User::where('role', 'admin')->get();

            // Menyesuaikan tampilan berdasarkan peran pengguna
            if ($role == 'superadmin') {
                return view('backend.dashboard.superadmindashboard', compact('superadmin', 'admin'));
            } elseif ($role == 'admin') {
                return view('backend.dashboard.admindashboard', compact('admin'));
            } else {
                // Peran lainnya, Anda dapat menyesuaikan atau menangani kasus ini sesuai kebutuhan
                return view('dashboard', compact('data'));
            }
        }

        return redirect()->route('login'); // Jika tidak terautentikasi, redirect ke halaman login
    }
}
