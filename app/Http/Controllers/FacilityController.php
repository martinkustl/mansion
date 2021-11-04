<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacilityController extends Controller
{
    public function index(Request $request)
    {
        $facility = DB::table('facility')
            ->where('facility.id', '=', $request->id)
            ->first();

        $facility->images = $this->getAllFacilityImages($facility->id);

        return view("facility.facility", ['facility' => $facility]);
    }


    private function getAllFacilityImages(int $facilityId)
    {
        return DB::table('static_file')->where('facility_id', '=', $facilityId)
            ->select('name as imgName', 'extension', 'id as staticFileId', 'folder_name as folderName')
            ->get()->toArray();
    }
}
