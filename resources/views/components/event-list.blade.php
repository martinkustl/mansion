<ul class="event-list">
    @foreach ($events as $event)
    {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
    <a class="event-list__link" href="/{{$event->id}}"> 
        <article>
            <x-card :title="$event->title" :description="$event->description" :date="format_datetime($event->date)" :path="$event->static_file_id.$event->extension" :name="$event->name"/>
        </article>
    </a>
    @endforeach
</ul>