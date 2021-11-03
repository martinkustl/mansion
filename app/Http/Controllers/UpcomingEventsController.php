<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    public function index()
    {
        // Získá akce, které dnes probíhají nebo teprve proběhnou
        $events = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->where('date', '>=', Carbon::now())
            ->select('event.*', 'static_file.id as static_file_id', 'static_file.extension', 'static_file.name')
            ->get();

        return view('upcoming_events.upcoming_events', ['events' => $events]);
    }
}
