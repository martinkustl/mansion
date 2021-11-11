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

    public function run()
    {
        $eventStaticFiles = [
            ['id' => 1, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img1', 'event_id' => 1],
            ['id' => 2, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img2', 'event_id' => 2],
            ['id' => 3, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img3', 'event_id' => 3],
            ['id' => 4, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img4', 'event_id' => 4],
            ['id' => 5, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'img5', 'event_id' => 5],
            ['id' => 32, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'party-img8', 'event_id' => 6],
            ['id' => 30, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'party-img6', 'event_id' => 7],
            ['id' => 31, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'party-img7', 'event_id' => 8],
            ['id' => 33, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'events', 'name' => 'party-img9', 'event_id' => 9]
        ];

        $facilityStaticFiles = [
            ['id' => 6, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img6', 'facility_id' => 1],
            ['id' => 7, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img7', 'facility_id' => 1],
            ['id' => 8, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img8', 'facility_id' => 1],
            ['id' => 9, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img9', 'facility_id' => 2],
            ['id' => 10, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img10', 'facility_id' => 2],
            ['id' => 11, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img11', 'facility_id' => 2],
            ['id' => 12, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img12', 'facility_id' => 2],
            ['id' => 13, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img13', 'facility_id' => 2],
            ['id' => 14, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'img14', 'facility_id' => 1],
            ['id' => 15, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Beach volleyball', 'facility_id' => 3],
            ['id' => 16, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Golfové hřiště', 'facility_id' => 3],
            ['id' => 17, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Posilovna', 'facility_id' => 3],
            ['id' => 18, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Vnitřní bazén', 'facility_id' => 3],
            ['id' => 19, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Kulečník', 'facility_id' => 3],
            ['id' => 20, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Svatební tabule 1', 'facility_id' => 4],
            ['id' => 21, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Obřad', 'facility_id' => 4],
            ['id' => 22, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Obřad dekorace', 'facility_id' => 4],
            ['id' => 23, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Svatební tabule 2', 'facility_id' => 4],
            ['id' => 24, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Vnitřní obřadní místnost', 'facility_id' => 4],
            ['id' => 25, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Koupelna 2', 'facility_id' => 5],
            ['id' => 26, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Koupelna', 'facility_id' => 5],
            ['id' => 27, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Ložnice 2', 'facility_id' => 5],
            ['id' => 28, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Ložnice 3', 'facility_id' => 5],
            ['id' => 29, 'mime_type' => 'application/jpg', 'extension' => '.jpg', 'folder_name' => 'facilities', 'name' => 'Ložnice', 'facility_id' => 5],
        ];

        DB::table('static_file')->insert($eventStaticFiles);
        DB::table('static_file')->insert($facilityStaticFiles);
    }
}
