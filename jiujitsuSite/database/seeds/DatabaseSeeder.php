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
        // call seeders in right order
        $this->call(EventsTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class); // foreign key depends on users
        $this->call(UsersTableSeeder::class); // foreign key depends on blogposts
    }
}
