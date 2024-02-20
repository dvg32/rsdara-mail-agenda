<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //
    public function Login()
    {
        return view('Layout.login');
    }

    public function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function Authentication(Request $request)
    {
        $validateLogin = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($validateLogin)) {
            # code...
            $validateLogin = Auth()->user();
            if ($validateLogin->status == '1' && $validateLogin->role == '1') {
                # code...
            } elseif ($validateLogin->status == '1' && $validateLogin->role == '2') {
                # code...
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect()->route('supervisorIndex');
            } elseif ($validateLogin->status == '1' && $validateLogin->role == '3') {
                # code...
                $request->session()->regenerate();
                Alert::Toast('Selamat Datang', 'success');
                return redirect()->route('dashboard');
            } else {
                # code...
                auth()->logout();
            }

        }
        Alert::error('Username atau Password Salah');
        return back();
    }

}
