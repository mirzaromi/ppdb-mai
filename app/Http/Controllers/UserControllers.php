<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserControllers extends Controller
{
    public function index()

    {
        return view('public.index',[
            'data' => Auth::user(),
        ]);
    }
}
