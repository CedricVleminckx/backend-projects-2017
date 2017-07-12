<?php

use Illuminate\Database\Seeder;

class costumerOrdersProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('costumerordersproducts')->insert([
          'quantity' => '1',
          'sizeOrderd' => 'Small',
          'orders_id' => '1',
          'products_id' => '2',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('costumerOrdersProducts')->insert([
          'quantity' => '2',
          'sizeOrderd' => 'Medium',
          'orders_id' => '2',
          'products_id' => '4',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('costumerOrdersProducts')->insert([
          'quantity' => '5',
          'sizeOrderd' => 'Large',
          'orders_id' => '1',
          'products_id' => '3',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
      ]);
    }
}
