<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
        ['title'=>'Tips cepat nikah', 'content'=>'lorem ipsum'],
             ['title'=>'Haruskah menunda nikah?', 'content'=>'lorem ipsum'],
                  ['title'=>'Membangun visi misi keluarga', 'content'=>'lorem ipsum']
                  ];
                  DB::table('post')->insert($post);


       
    }
}
