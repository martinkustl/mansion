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
            ->select('event.*', 'static_file.id as static_file_id', 'static_file.extension')
            ->get();

        return view('home.home', ['events' => $events]);
    }
}
