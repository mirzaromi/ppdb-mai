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
    public function store(Request $request, NumRegister $NumRegister)
    {
        
        $validate = $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nisn' => 'required|integer',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'sekolah_asal' => 'required',
            'no_hp' => 'required|integer|digits_between:7,14',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'email' => 'required|email:rfc,dns',
            'jalur_sks' => 'required',
        ]);

        // dd($validate);
        
        $num = NumRegister::select("number")->first();
        $num_update = $num->number;
        $num_update += 1;
        $number = sprintf("%04d", $num_update);
        $username = "MAI".date("Y")."01".$number;

        $rand_pass = rand(10000000, 99999999);
        $password = bcrypt($rand_pass);
        $user_data = [
            "username" => $username,
            "password" => $password,
        ];

        

        User::create($user_data);
        NumRegister::where('id',1)->update(["number" => $num_update]);

        $user_id = User::select('id')->orderBy('id', 'desc')->first();

        $validate['user_id'] = $user_id->id;

        Register::create($validate);
        return redirect()->route('post_register', [
            'username' => $username,
            'password' => $rand_pass
        ]);
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
