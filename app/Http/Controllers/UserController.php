<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return to_route('dashboard.index');
        } else {
            return view('login');
        }
    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return to_route('dashboard.index');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return to_route('login');

        }
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
