<?php

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscriptions')->insert([
            'users_id' => '1',
            'events_id' => '1',
        ]);
        DB::table('subscriptions')->insert([
            'users_id' => '1',
            'events_id' => '2',
        ]);
        DB::table('subscriptions')->insert([
            'users_id' => '2',
            'events_id' => '1',
        ]);
    }
}
