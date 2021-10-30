<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ['type' => 'party', 'name_cs' => 'Párty'],
            ['type' => 'concert', 'name_cs' => 'Koncert'],
            ['type' => 'theatre', 'name_cs' => 'Divadlo']
        ];

        DB::table('event_type')->insert($events);
    }
}
