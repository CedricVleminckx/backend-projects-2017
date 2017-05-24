<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'eventName' => 'Belgisch kampioenschap',
            'content' => 'Binnenkort is er het Belgisch kampioenschap jiujitsu. Iedereen mag deelnemen aan dit toernooi dat zal doorgaan op 1 Juni te Antwerpen. Schrijf je snel in en wie weet word jij wel kampioen!',
            'location' => 'Sporthal Antwerpen',
            'price' => 'Gratis',
            'type' => 'Wedstrijd',
            'when' => Carbon::now(),
            'who' => 'false',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('events')->insert([
            'eventName' => 'Stage in de verdededings sporten',
            'content' => 'Op 5 augustus neemt onze club deel aan een stage waar je veel verschillende andere verdededings sporten zal kunnen leren kennen. Kom je kennis uitbreiden op deze leuke stage.',
            'location' => 'Sporthal Mechelen',
            'price' => '€5',
            'type' => 'Stage',
            'when' => Carbon::now(),
            'who' => 'true',
            'created_at' => date('d-m-Y H:i:s'),
            'updated_at' => date('d-m-Y H:i:s')
        ]);

    }
}
