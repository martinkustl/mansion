<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Nejdřív vše smazat
        DB::table('event')->delete();
        DB::table('event_type')->delete();
        DB::table('static_file')->delete();

        // Následně vše seednout
        $this->call([
            EventTypeSeeder::class,
            EventSeeder::class,
            StaticFileSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
