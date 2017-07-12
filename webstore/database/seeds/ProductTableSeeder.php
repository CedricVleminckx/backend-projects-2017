<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //JEANS
      //_______
      DB::table('products')->insert([
          'productName' => 'Feather soft low jeggings',
          'productNumber' => '101',
          'price' => '25',
          'size' => 'Small',
          'color' => 'Blue',
          'stockQuantity' => '50',
          'gender' => 'Women',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Shaping skinny high jeans',
          'productNumber' => '102',
          'price' => '69,99',
          'size' => 'Small',
          'color' => 'Black',
          'stockQuantity' => '70',
          'gender' => 'Women',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Skinny low jeans',
          'productNumber' => '103',
          'price' => '75,85',
          'size' => 'Small',
          'color' => 'Blue',
          'stockQuantity' => '15',
          'gender' => 'Women',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Skinny low trash jeans',
          'productNumber' => '104',
          'price' => '45',
          'size' => 'Small',
          'color' => 'Black',
          'stockQuantity' => '34',
          'gender' => 'Men',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Skinny regular ankle jeans',
          'productNumber' => '105',
          'price' => '80,50',
          'size' => 'Small',
          'color' => 'Black',
          'stockQuantity' => '32',
          'gender' => 'Women',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Skinny regular jeans',
          'productNumber' => '106',
          'price' => '67,99',
          'size' => 'Small',
          'color' => 'Black',
          'stockQuantity' => '103',
          'gender' => 'Men',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Slim low jeans',
          'productNumber' => '107',
          'price' => '87,25',
          'size' => 'Small',
          'color' => 'Blue',
          'stockQuantity' => '32',
          'gender' => 'Men',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Slim regular jeans',
          'productNumber' => '108',
          'price' => '90,10',
          'size' => 'Small',
          'color' => 'Blue',
          'stockQuantity' => '69',
          'gender' => 'Women',
          'category_id' => '1',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      //Shirts
      //_______
      DB::table('products')->insert([
          'productName' => 'Jersey shirt',
          'productNumber' => '201',
          'price' => '23,35',
          'size' => 'Medium',
          'color' => 'Green',
          'stockQuantity' => '30',
          'gender' => 'Women',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'T-shirt',
          'productNumber' => '202',
          'price' => '9,99',
          'size' => 'Medium',
          'color' => 'White',
          'stockQuantity' => '74',
          'gender' => 'Women',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'T-shirt met borstzak',
          'productNumber' => '203',
          'price' => '15,50',
          'size' => 'Medium',
          'color' => 'Black',
          'stockQuantity' => '82',
          'gender' => 'Men',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'T-shirt met ronde uitsnijding',
          'productNumber' => '204',
          'price' => '12',
          'size' => 'Medium',
          'color' => 'Blue',
          'stockQuantity' => '27',
          'gender' => 'Men',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'T-shirt flamingo',
          'productNumber' => '205',
          'price' => '17,25',
          'size' => 'Medium',
          'color' => 'Pink',
          'stockQuantity' => '30',
          'gender' => 'Women',
          'category_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      //Dresses
      //_______
      DB::table('products')->insert([
          'productName' => 'Maxi jurk',
          'productNumber' => '301',
          'price' => '140',
          'size' => 'Medium',
          'color' => 'Pink',
          'stockQuantity' => '45',
          'gender' => 'Women',
          'category_id' => '3',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Nauwsluitende jurk',
          'productNumber' => '302',
          'price' => '75',
          'size' => 'Medium',
          'color' => 'Red',
          'stockQuantity' => '23',
          'gender' => 'Women',
          'category_id' => '3',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      //Jackets
      //_______
      DB::table('products')->insert([
          'productName' => 'Bomber jack',
          'productNumber' => '401',
          'price' => '85',
          'size' => 'Medium',
          'color' => 'Red',
          'stockQuantity' => '7',
          'gender' => 'Men',
          'category_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Parka',
          'productNumber' => '402',
          'price' => '74,99',
          'size' => 'Medium',
          'color' => 'Red',
          'stockQuantity' => '84',
          'gender' => 'Women',
          'category_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Pilot jack',
          'productNumber' => '403',
          'price' => '120',
          'size' => 'Medium',
          'color' => 'Green',
          'stockQuantity' => '64',
          'gender' => 'Men',
          'category_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      //Blazers
      //_______
      DB::table('products')->insert([
          'productName' => 'Blazer',
          'productNumber' => '501',
          'price' => '100',
          'size' => 'Medium',
          'color' => 'Grey',
          'stockQuantity' => '7',
          'gender' => 'Men',
          'category_id' => '5',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Linnen blazer',
          'productNumber' => '502',
          'price' => '109,99',
          'size' => 'Medium',
          'color' => 'Blue',
          'stockQuantity' => '38',
          'gender' => 'Men',
          'category_id' => '5',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('products')->insert([
          'productName' => 'Tricot blazer',
          'productNumber' => '503',
          'price' => '92,50',
          'size' => 'Medium',
          'color' => 'White',
          'stockQuantity' => '81',
          'gender' => 'Women',
          'category_id' => '5',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
