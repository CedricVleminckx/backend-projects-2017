<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
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
          'phoneNumber' => '0470825294',
          'address' => 'Kerkstraat 118, 1851 Humbeek',
          'birthdate' => Carbon::now(),
          'password' => bcrypt('Azerty123'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('users')->insert([
          'name' => 'Michiel',
          'lastname' => 'Tondeur',
          'email' => 'michiel.tondeur@student.odisee.be',
          'phoneNumber' => '0470123456',
          'address' => 'dorpstraat 5, 1234 Lennik',
          'birthdate' => Carbon::now(),
          'password' => bcrypt('Azerty123'),
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
