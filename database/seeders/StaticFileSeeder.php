<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * id
     * mime_type
     * extension
     * folder_name
     * name
     * height
     * width
     * size
     * facility_id
     * event_id
     */

    public function run()
    {
        $staticFiles = [
            ['id' => 1, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img1', 'event_id' => 1],
            ['id' => 2, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img2', 'event_id' => 2],
            ['id' => 3, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img3', 'event_id' => 3],
            ['id' => 4, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img4', 'event_id' => 4],
            ['id' => 5, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img5', 'event_id' => 5],
        ];

        DB::table('static_file')->insert($staticFiles);
    }
}
