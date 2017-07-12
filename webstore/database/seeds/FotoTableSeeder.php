<?php

use Illuminate\Database\Seeder;

class FotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Jeans
      //______
      //Feather soft low jeggings
      DB::table('fotos')->insert([
          'foto' => '/storage/FeatherSoftLowJeggings.jpg',
          'product_Number' => '101',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/FeatherSoftLowJeggings2.jpg',
          'product_Number' => '101',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/FeatherSoftLowJeggings3.jpg',
          'product_Number' => '101',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Shaping Skinny High jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/ShapingSkinnyHighJeans.jpg',
          'product_Number' => '102',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/ShapingSkinnyHighJeans2.jpg',
          'product_Number' => '102',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/ShapingSkinnyHighJeans3.jpg',
          'product_Number' => '102',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Shaping Low Jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowJeans.jpg',
          'product_Number' => '103',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowJeans2.jpg',
          'product_Number' => '103',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowJeans3.jpg',
          'product_Number' => '103',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Skinny Low Trasher jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowTrashedJeans.jpg',
          'product_Number' => '104',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowTrashedJeans2.jpg',
          'product_Number' => '104',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyLowTrashedJeans3.jpg',
          'product_Number' => '104',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Skinny regular ankle jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularAnkleJeans.jpg',
          'product_Number' => '105',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularAnkleJeans2.jpg',
          'product_Number' => '105',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularAnkleJeans3.jpg',
          'product_Number' => '105',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Skinny regular Jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularJeans.jpg',
          'product_Number' => '106',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularJeans2.jpg',
          'product_Number' => '106',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SkinnyRegularJeans3.jpg',
          'product_Number' => '106',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Slim Low Jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimLowJeans.jpg',
          'product_Number' => '107',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimLowJeans2.jpg',
          'product_Number' => '107',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimLowJeans3.jpg',
          'product_Number' => '107',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Slim Regular Jeans
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimRegularJeans.jpg',
          'product_Number' => '108',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimRegularJeans2.jpg',
          'product_Number' => '108',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/SlimRegularJeans3.jpg',
          'product_Number' => '108',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);


      //Shirts
      //______

      //Jersey Shirt
      DB::table('fotos')->insert([
          'foto' => '/storage/Jerseyshirt.jpg',
          'product_Number' => '201',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/Jerseyshirt2.jpg',
          'product_Number' => '201',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //T-shirt
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirt.jpg',
          'product_Number' => '202',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirt2.jpg',
          'product_Number' => '202',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //T-shirt mit brus...
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirtmitBrusttashe.jpg',
          'product_Number' => '203',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirtmitBrusttashe2.jpg',
          'product_Number' => '203',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //T-shirt mit randau
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirtmitRundausschnitt.jpg',
          'product_Number' => '204',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/T-shirtmitRundausschnitt2.jpg',
          'product_Number' => '204',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Weitest T-shirt
      DB::table('fotos')->insert([
          'foto' => '/storage/WeitesT-Shirt.jpg',
          'product_Number' => '205',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/WeitesT-Shirt2.jpg',
          'product_Number' => '205',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Dresses
      //_______

      //Maxi Jurk
      DB::table('fotos')->insert([
          'foto' => '/storage/MaxiJurk.jpg',
          'product_Number' => '301',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/MaxiJurk2.jpg',
          'product_Number' => '301',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Nauwsluitende jurk
      DB::table('fotos')->insert([
          'foto' => '/storage/NauwSluitendeJurk.jpg',
          'product_Number' => '302',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/NauwSluitendeJurk2.jpg',
          'product_Number' => '302',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Jackets
      //________

      //BomberJack
      DB::table('fotos')->insert([
          'foto' => '/storage/BomberJack.jpg',
          'product_Number' => '401',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/BomberJack2.jpg',
          'product_Number' => '401',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Pilot jack
      DB::table('fotos')->insert([
          'foto' => '/storage/pilotenJack.jpg',
          'product_Number' => '402',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/pilotenJack2.jpg',
          'product_Number' => '402',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Blazers
      //_______

      //Blazer
      DB::table('fotos')->insert([
          'foto' => '/storage/Blazer.jpg',
          'product_Number' => '501',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/Blazer2.jpg',
          'product_Number' => '501',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Linnen Blazer
      DB::table('fotos')->insert([
          'foto' => '/storage/LinnenBlazer.jpg',
          'product_Number' => '502',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/LinnenBlazer2.jpg',
          'product_Number' => '502',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/LinnenBlazer3.jpg',
          'product_Number' => '502',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);

      //Tricot Blazer
      DB::table('fotos')->insert([
          'foto' => '/storage/TricotBlazer.jpg',
          'product_Number' => '503',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('fotos')->insert([
          'foto' => '/storage/TricotBlazer2.jpg',
          'product_Number' => '503',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
