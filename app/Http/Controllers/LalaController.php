<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Lala;

class LalaController extends Controller
{
    public function index(Lala $lala)
    {
        return view('public.index',[
            "data" => Lala::get()
        ]);
    }
}
