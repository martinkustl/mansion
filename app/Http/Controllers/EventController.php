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

    public function editEventView(Request $request)
    {
        $event = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->join('event_type', 'event_type.id', '=', 'event_type_id')
            ->where('event.id', '=', $request->id)
            ->select('event.*', 'static_file.id as staticFileId', 'static_file.extension', 'static_file.name as imgName', 'event_type.type as selectedEventType')
            ->first();

        $eventTypes = DB::table('event_type')
            ->select('type', 'name_cs as name', 'id')
            ->get();
        

        return view('event.edit-event', ['eventTypes' => $eventTypes, 'event' => $event]);
    }

    public function editEvent(Request $request)
    {

    }
}
