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
        $eventTypes = [
            ['id' => 1,  'type' => 'party', 'name_cs' => 'Párty'],
            ['id' => 2, 'type' => 'concert', 'name_cs' => 'Koncert'],
            ['id' => 3, 'type' => 'theatre', 'name_cs' => 'Divadlo']
        ];

        DB::table('event_type')->insert($eventTypes);
    }
}
