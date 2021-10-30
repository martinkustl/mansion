<ul class="event-list">
    @foreach ($events as $event)
    {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
    <a class="event-list__link" href="/{{$event->id}}"> 
        <x-card :title="$event->title" :description="$event->description" :date="date('d.m.Y H:i', strtotime($event->date))" :path="$event->static_file_id.$event->extension"/>
    </a>
    @endforeach
</ul>