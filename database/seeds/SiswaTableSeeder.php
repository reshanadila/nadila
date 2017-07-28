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
        ['nama'=>'sulis', 'alamat'=>'kp sukamenak','tgl'=>'2000-11-05']
            
                  ];
                  DB::table('siswa')->insert($siswa);
    }
}
