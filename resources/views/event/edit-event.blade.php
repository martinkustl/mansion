@extends ('layouts.detail')

@section('title')
    Detail události
@endsection

@section('content')
    {{--    TODO - přidat tlačítko zpět --}}
    {{--     TODO - přidat hlášku o úspěšné editaci, nebo na stránku eventu hodit tlačítko pro editaci eventu--}}
    <form method="POST" action="/events/{{$event->id}}/edit" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="edit-event--uploaded-image">
            <label id="eventImageLabel" for="eventImage" class="w-100 h-100">
                <img class="event-detail--image" src="/images/events/{{$event->staticFileId.$event->extension}}"
                     alt="{{$event->imgName}}"/>
            </label>
            <input type="file" name="eventImage" id="eventImage" onchange="readInput(this)"
                   style="position: absolute; opacity:0; z-index: -1">

            @error("eventImage")
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <x-forms.input inputType="text" labelText="Název" placeholder="Název" inputId="title"
                       inputName="title" inputValue="{{$event->title}}" required/>
        <label class="w-auto" style="white-space: nowrap; font-size: 1rem; margin-bottom: 0;"
               for="eventType">Typ akce
        </label>
        <select class="form-select w-100" aria-label="multiple select" name="eventType">
            @foreach($eventTypes as $eventType)
                <option
                    value="{{$eventType->id}}" {{$event->selectedEventType === $eventType->type ? 'selected' : ''}}>{{$eventType->name}}</option>
            @endforeach
            <option value="" {{!$event->selectedEventType ? 'selected' : ''}}>Vše</option>
        </select>
        @error("eventType")
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <x-forms.input inputType="datetime-local" labelText="Datum" placeholder="Datum ve formátu DD.MM.YYYY"
                       inputId="date"
                       inputName="date"
                       {{-- datetime-local vyžaduje specifický datetime formát, jinak hodnotu nezobrazí --}}
                       inputValue="{{date('Y-m-d\TH:i:s', strtotime($event->date))}}"
                       required

        />
        <x-forms.input inputType="number" labelText="Cena" placeholder="Cena (pouze číslo)" inputId="price"
                       inputName="price" inputValue="{{$event->entrance_fee}}" required/>
        <x-forms.text-area labelText="Popis" placeholder="Popis" inputId="description" inputName="description"
                           inputValue="{{$event->description}}" required/>
        <div class="d-flex justify-content-end w-100 mt-3">
            <a href="/events" type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">
                Zrušit změny a vrátit se na seznam
            </a>
            <x-forms.submit-button btnText="Potvrdit změny"/>
        </div>
    </form>
@endsection

