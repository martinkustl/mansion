<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    public function index(Request $request)
    {
        // Získá akce, které dnes probíhají nebo teprve proběhnou


        $events = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->join('event_type', 'event_type_id', '=', 'event_type.id')
            ->where('date', '>=', Carbon::now());
//        $events->get();
//        dump($events->get());

//            ->select('event.*', 'static_file.id as staticFileId', 'static_file.extension', 'static_file.name as imgName', 'static_file.folder_name as folderName')
//            ->get();


        if ($request->query('eventType')) {
            $events->where('event_type.type', '=', $request->query('eventType'));
        }

        $events
            ->orderBy('date')
            ->select('event.*', 'static_file.id as staticFileId', 'static_file.extension', 'static_file.name as imgName', 'static_file.folder_name as folderName');

        $eventTypes = DB::table('event_type')
            ->select('type', 'name_cs as name')
            ->get();
        
        return view('upcoming_events.upcoming_events', ['events' => $events->paginate(2)->withQueryString(),
            'eventTypes' => $eventTypes, 'selectedEventType' => $request->query('eventType')]);
    }
}
