<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Cedric',
            'lastname' => 'Vleminckx',
            'email' => 'cedric.vleminckx@student.odisee.be',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Timo',
            'lastname' => 'Geuzens',
            'email' => 'timo.geuzens@hotmail.com',
            'password' => bcrypt('Azerty123'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}
