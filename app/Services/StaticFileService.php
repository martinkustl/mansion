<?php


namespace App\Services;

use App\Models\StaticFile;

class StaticFileService
{

    public function updateEventStaticFile($eventImage, int $eventId): StaticFile
    {
        return $this->saveStaticFile(StaticFile::where('event_id', $eventId)->first(), $eventImage, $eventId);
    }

    public function createEventStaticFile($eventImage, int $eventId): StaticFile
    {
        return $this->saveStaticFile(new StaticFile, $eventImage, $eventId);
    }

    private function saveImage($eventImage, $staticFile)
    {
        // místo move lze také použít metodu store, nicméně ta by to uložila do složky storage
        // to by ničemu nevadilo, protože je mezi klasickou public složkou a storage složkou symlink
        // to znamená, že cokoliv je ve storage složce, se v aplikací objeví i v public složce
        // nicméně od začátku byly obrázky ukádány přímo do složky public, a tak z důvodu konzitentního chování
        // byl zvolen tento přístup
        $eventImage->move(public_path() . '/images/events', $staticFile->id . '' . $staticFile->extension);
    }

    private function saveStaticFile($staticFile, $eventImage, int $eventId): StaticFile
    {
        $staticFile->mime_type = $eventImage->getMimeType();
        $staticFile->extension = '.' . $eventImage->getClientOriginalExtension();
        $staticFile->folder_name = 'events';
        $staticFile->name = $eventImage->getClientOriginalName();
        $staticFile->event_id = $eventId;
        $staticFile->save();

        $this->saveImage($eventImage, $staticFile);

        return $staticFile;
    }
}
