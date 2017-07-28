<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $siswa = [
        ['nama'=>'resha nadila', 'alamat'=>'kp sekeandur','tgl'=>'2000-07-31'],
        ['nama'=>'windi novianti', 'alamat'=>'kp cilebak','tgl'=>'2000-07-29'],
        ['nama'=>'sulis', 'alamat'=>'kp sukamenak','tgl'=>'2000-11-05'],
        ['nama'=>'lindiyani', 'alamat'=>'kp cilebak','tgl'=>'2000-11-11'],
        ['nama'=>'nadiyah', 'alamat'=>'kp sayuran','tgl'=>'2000-12-05']
            
                  ];
                  DB::table('siswa')->insert($siswa);
    }
}
