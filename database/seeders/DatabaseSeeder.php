<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Register;
use App\Models\NumRegister;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'username' => 'MAI202201001',
            'password' => bcrypt('ppdbmai'),
        ]);

        User::create([
            'username' => 'MAI202201002',
            'password' => bcrypt('ppdbmai'),
        ]);

        Register::create([
            'nama' => 'Mirza Romi Setiawan',
            'tempat_lahir' => 'sidoarjo',
            'tanggal_lahir' => '1999-06-02',
            'nisn' => 123456789,
            'jenis_kelamin' => 'l',
            'alamat' => 'dukuh banjarbendo, Sidoarjo',
            'sekolah_asal' => 'MTs Unggulan Amanatul Ummah Pacet',
            'no_hp' => '087751655141',
            'nama_ayah' => 'Makromi',
            'nama_ibu' => 'Siti Munawaroh',
            'email' => 'mirzaromi14@gmail.com',
            'jalur_sks' => 'sks2_tulis',
            'user_id' => 1
        ]);
        
        Register::create([
            'nama' => 'Jalaluddin Asysyuti',
            'tempat_lahir' => 'Lamongan',
            'tanggal_lahir' => '2005-06-12',
            'nisn' => 123456789,
            'jenis_kelamin' => 'l',
            'alamat' => 'Mantup Lamongan',
            'sekolah_asal' => 'MTs Unggulan Amanatul Ummah Pacet',
            'no_hp' => '087751655141',
            'nama_ayah' => 'Solikin',
            'nama_ibu' => 'Mukijah',
            'email' => 'adin@gmail.com',
            'jalur_sks' => 'sks2_tulis',
            'user_id' => 2
        ]);
        
        NumRegister::create([
            "number" => 0
        ]);

    }
}
