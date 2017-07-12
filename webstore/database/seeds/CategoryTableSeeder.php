<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('category')->insert([
          'categoryName' => 'Jeans',
          'foto' => '/storage/jeansCat.jpg',
      ]);
      DB::table('category')->insert([
          'categoryName' => 'Shirts',
          'foto' => '/storage/shirtsCat.jpg',
      ]);
      DB::table('category')->insert([
          'categoryName' => 'Dresses',
          'foto' => '/storage/dressesCat.jpg',
      ]);
      DB::table('category')->insert([
          'categoryName' => 'Jackets',
          'foto' => '/storage/jacketsCat.jpg',
      ]);
      DB::table('category')->insert([
          'categoryName' => 'Blazers',
          'foto' => '/storage/blazersCat.jpg',
      ]);
    }
}
