<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        // Získá akce, které již proběhly
        $events = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->where('date', '<', Carbon::now())
            ->select('event.*', 'static_file.id as staticFileId', 'static_file.extension', 'static_file.name as imgName', 'static_file.folder_name as folderName')
            ->orderBy('event.date', 'desc')
            ->limit(5)
            ->get();

        return view('home.home', ['events' => $events]);
    }
}
