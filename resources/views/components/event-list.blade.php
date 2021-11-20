<ul class="items-list">
    @foreach ($events as $event)
        <x-event-card :title="$event->title" :description="$event->description"
                      :date="format_datetime($event->date)"
                      :img-path="$event->folderName.'/'.$event->staticFileId.$event->extension"
                      :img-name="$event->imgName"
                      :event-id="$event->id"
                      :base-path="$basePath"
                      :is-editable="$isEditable"
        />
    @endforeach
    @if(count($events) === 0)
        <p class="text-center mt-4 p-4 c-no-events">
            <strong>
                Žádné akce k zobrazení
            </strong>
        </p>
    @endif
</ul>
