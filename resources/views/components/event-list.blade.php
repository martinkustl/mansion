<ul class="event-list">
    @foreach ($events as $event)
    {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
    <a class="event-list__link" href="{{$basePath}}/{{$event->id}}"> 
        <article>
            <x-event-card :title="$event->title" :description="$event->description" :date="format_datetime($event->date)" :imgPath="$event->folderName.'/'.$event->staticFileId.$event->extension" :imgName="$event->imgName"/>
        </article>
    </a>
    @endforeach
</ul>