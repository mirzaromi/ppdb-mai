<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\NumRegister;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegisterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'sekolah_asal' => 'required',
            'no_hp' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required',
            'jalur_sks' => 'required',
        ]);

        Register::create($validate);

        $num = NumRegister::first();
        $number = $num->number;
        $number += 1; 
        NumRegister::where('id',1)->update(["number" => $number]);
        $number_reg = sprintf("%03d", $number);
        $username = 'MAI'.date("Y").'01'.$number_reg;
        $password = rand(10000000,99999999);
        // dd($password);
        User::create([
            'username' => $username,
            'password' => bcrypt($password),
        ]);
        

        return redirect('/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegisterRequest  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegisterRequest $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
