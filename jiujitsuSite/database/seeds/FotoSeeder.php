<?php

use Illuminate\Database\Seeder;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fotos')->insert([
            'foto' => '/storage/recent01.jpg',
        ]);
        DB::table('fotos')->insert([
            'foto' => '/storage/recent02.jpg',
        ]);
        DB::table('fotos')->insert([
            'foto' => '/storage/recent03.jpg',
        ]);
        DB::table('fotos')->insert([
            'foto' => '/storage/recent04.jpg',
        ]);
    }
}
