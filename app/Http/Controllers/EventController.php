<?php

namespace App\Http\Controllers;

use App\Models\StaticFile;
use App\Services\StaticFileService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    protected $staticFileService;

    public function __construct(StaticFileService $staticFileService)
    {
        $this->staticFileService = $staticFileService;
    }

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
        $todayDate = Carbon::now();

        $validatedEvent = $request->validate([
            'title' => 'required|max:45',
            // Datum musí být v budoucnosti
            'date' => 'required|date|after_or_equal:' . $todayDate . '',
            'price' => 'integer',
            'description' => 'required',
            'eventType' => 'required|integer',
            'eventImage' => 'image'
        ]);

        $eventId = $request->id;

        DB::table('event')->where('id', '=', $eventId)->update([
            'title' => $validatedEvent['title'],
            'date' => $validatedEvent['date'],
            'entrance_fee' => $validatedEvent['price'],
            'description' => $validatedEvent['description'],
            'event_type_id' => $validatedEvent['eventType'],
        ]);

        if ($validatedEvent['eventImage']) {
            $this->staticFileService->updateEventStaticFile($validatedEvent['eventImage'], $eventId);
        }

        return redirect('/events/' . $eventId . '/edit');
    }
}
