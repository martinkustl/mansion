<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $event = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->where('event.id', '=', $request->id)
            ->select('event.*', 'static_file.id as static_file_id', 'static_file.extension', 'static_file.name')
            ->first();

        return view("event.event", ['event' => $event]);
    }
}
