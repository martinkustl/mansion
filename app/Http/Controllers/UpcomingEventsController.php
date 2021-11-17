<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\StaticFile;
use App\Services\EventService;
use App\Services\StaticFileService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    // Event servisa obsahuje sdílenou logiku pro event
    // lze ji najít v App/Services/EventService
    // Aby ji šlo použít, tak je potřeba vytvořit proměnnou, a následně ji zavolat v konstruktoru
    protected $eventService;
    protected $staticFileService;

    public function __construct(EventService $eventService, StaticFileService $staticFileService)
    {
        $this->eventService = $eventService;
        $this->staticFileService = $staticFileService;
    }

    public function index(Request $request)
    {
        // Získá akce, které dnes probíhají nebo teprve proběhnou


        $events = DB::table('event')
            ->join('static_file', 'event.id', '=', 'static_file.event_id')
            ->join('event_type', 'event_type_id', '=', 'event_type.id')
            ->where('date', '>=', Carbon::now());

        if ($request->query('eventType')) {
            $events->where('event_type.type', '=', $request->query('eventType'));
        }

        $events
            ->orderBy('date')
            ->select('event.*', 'static_file.id as staticFileId', 'static_file.extension', 'static_file.name as imgName', 'static_file.folder_name as folderName');

        $eventTypes = DB::table('event_type')
            ->select('type', 'name_cs as name', 'id')
            ->get();

        return view('upcoming_events.upcoming_events', ['events' => $events->paginate(2)->appends(['page' => $request->query('page'), 'eventType' => $request->query('eventType')]),
            'eventTypes' => $eventTypes, 'selectedEventType' => $request->query('eventType')]);
    }

    public function createEvent(Request $request)
    {
        // Vytvoření aktuálního datumu
        $todayDate = Carbon::now();

        $validatedEvent = $request->validate([
            'title' => 'required|max:45',
            // Datum musí být v budoucnosti
            'date' => 'required|date|after_or_equal:' . $todayDate . '',
            'price' => 'integer',
            'description' => 'required',
            'eventType' => 'required|integer',
            'eventImage' => 'required|image'
        ]);

        // Uložení eventu do DB
        $event = new Event;
        $event->title = $validatedEvent['title'];
        $event->date = $validatedEvent['date'];
        $event->description = $validatedEvent['description'];
        $event->entrance_fee = $validatedEvent['price'];
        $event->event_type_id = $validatedEvent['eventType'];
        $event->save();

        // Uložení obrázku do DB, včetně přiřazení k eventu z předchozího kroku
        $this->staticFileService->createEventStaticFile($validatedEvent['eventImage'], $event->id);

        return redirect('/events');
    }

    public function deleteEvent(Request $request)
    {
        $this->eventService->deleteEvent($request);

        return redirect('/events');

    }

}
