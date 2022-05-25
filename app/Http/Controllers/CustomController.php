<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function editBackground()
    {
        return view('auth.custom.background');
    }

    public function editRunningText()
    {
        return view('auth.custom.running-text');
    }
}
