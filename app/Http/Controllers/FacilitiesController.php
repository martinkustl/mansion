<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FacilitiesController extends Controller
{
    public function index()
    {
        $facilities = DB::table('facility')
            ->get()->toArray();


        // array_map - první argument je funkce, která se provede na daném poli (druhý argument)
        // zde se vezme facility a přidá se mu jeden obrázek
        $facilities = array_map('self::addImageToFacility', $facilities);

        return view('facilities.facilities', ['facilities' => $facilities]);
    }


    private function addImageToFacility(object $facility): object
    {
        $img = DB::table('static_file')->where('facility_id', '=', $facility->id)
            ->select('name as imgName', 'extension', 'id as staticFileId', 'folder_name as folderName')
            ->first();
        return (object)array_merge((array)$facility, (array)$img);
    }
}
