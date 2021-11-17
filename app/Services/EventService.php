<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class EventService
{
    public function deleteEvent(Request $request)
    {
        $validatedRequest = $request->validate([
            'eventId' => 'required|integer'
        ]);

        // Víme, že pro každý event je jeden static file, proto je zde na konci first(), který najde první záznam
        $staticFile = DB::table('static_file')->where('event_id', '=', $validatedRequest['eventId'])->first();

        // Smaže obrázek k danému eventu
        $this->deleteImage($staticFile->id . '' . $staticFile->extension);

        // Smaže statický soubor k danému eventu
        DB::table('static_file')->where('event_id', '=', $validatedRequest['eventId'])->delete();

        // Smaže samotný event
        DB::table('event')->where('id', '=', $validatedRequest['eventId'])->delete();

//        return redirect('/events');
    }

    private function deleteImage(string $imgName)
    {
        if (!File::exists(public_path('images/events/' . $imgName))) {
            return;
        }
        return File::delete('images/events/' . $imgName);
    }
}
