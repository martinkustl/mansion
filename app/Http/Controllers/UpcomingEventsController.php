<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\StaticFile;
use App\Services\EventService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    // Event servisa obsahuje sdílenou logiku pro event
    // lze ji najít v App/Services/EventService
    // Aby ji šlo použít, tak je potřeba vytvořit proměnnou, a následně ji zavolat v konstruktoru
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
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
        $validatedEvent = $request->validate([
            // TODO - přidat max délku
            'title' => 'required',
            // TODO - přidání validace, aby datum bylo od současnosti dál
            'date' => 'required|date',
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
        $staticFile = new StaticFile;
        $staticFile->mime_type = $request->eventImage->getMimeType();
        $staticFile->extension = '.' . $request->eventImage->getClientOriginalExtension();
        $staticFile->folder_name = 'events';
        $staticFile->name = $request->eventImage->getClientOriginalName();
        $staticFile->event_id = $event->id;
        $staticFile->save();

        // místo move lze také použít metodu store, nicméně ta by to uložila do složky storage
        // to by ničemu nevadilo, protože je mezi klasickou public složkou a storage složkou symlink
        // to znamená, že cokoliv je ve storage složce, se v aplikací objeví i v public složce
        // nicméně od začátku byly obrázky ukádány přímo do složky public, a tak z důvodu konzitentního chování
        // byl zvolen tento přístup
        $request->eventImage->move(public_path() . '/images/events', $staticFile->id . '' . $staticFile->extension);


        return redirect('/events');
    }

    public function deleteEvent(Request $request)
    {
        $this->eventService->deleteEvent($request);

        return redirect('/events');

    }
}
