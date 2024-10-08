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
        DB::table('static_file')->delete();
        DB::table('event')->delete();
        DB::table('facility')->delete();
        DB::table('event_type')->delete();
        DB::table('users')->delete();

        // Následně vše seednout
        $this->call([
            EventTypeSeeder::class,
            EventSeeder::class,
            FacilitySeeder::class,
            StaticFileSeeder::class,
            UserSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
