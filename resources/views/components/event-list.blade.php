<ul class="items-list">
    @foreach ($events as $event)
        {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
        <li>
            <a class="event-list__link" href="{{$basePath}}/{{$event->id}}">
                <x-event-card :title="$event->title" :description="$event->description"
                              :date="format_datetime($event->date)"
                              :imgPath="$event->folderName.'/'.$event->staticFileId.$event->extension"
                              :imgName="$event->imgName"/>
            </a>
        </li>
    @endforeach
</ul>
