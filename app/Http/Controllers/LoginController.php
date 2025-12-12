<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    Public function login()
    {
        return view('auth/login');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $login =[
            'name' => $request->name,
            'password' => $request->password,
        ];

        $request->session()->regenerate();

        if(Auth::attempt($login)) 
        {
            if(Auth::User()->role == 'admin')
            {
                return redirect()->route('admin.index');
            } 
            elseif(Auth::User()->role == 'gudang')
            {
                return redirect()->route('gudang.index');
            }
            elseif(Auth::User()->role == 'kasir')
            {
                return redirect()->route('kasir.index');
            }
        }
        else {
            return redirect()->route('login');
        }
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
}
