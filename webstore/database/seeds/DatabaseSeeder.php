<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(costumerOrdersProductsTableSeeder::class);
        $this->call(FotoTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
