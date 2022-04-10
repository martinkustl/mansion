@extends ('layouts.detail')

@section('title')
    Detail události
@endsection

@section('content')
    <form method="POST" action="/events/{{$event->id}}/edit" enctype="multipart/form-data">
        @method("PUT")
        @csrf
        <div class="edit-event--uploaded-image">
            <label id="eventImageLabel" for="eventImage" class="w-100 h-100">
                <img class="event-detail--image" src="/images/events/{{$event->staticFileId.$event->extension}}"
                     alt="{{$event->imgName}}"/>
            </label>
            <input type="file" name="eventImage" id="eventImage" onchange="readInput(this)" class="image-upload--input">

            @error("eventImage")
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <x-forms.input input-type="text" label-text="Název" placeholder="Název" input-id="title"
                       input-name="title" input-value="{{$event->title}}" required/>
        <label class="w-auto event-type--label" for="eventType">Typ akce
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
        <x-forms.input input-type="datetime-local" label-text="Datum" placeholder="Datum ve formátu DD.MM.YYYY"
                       input-id="date"
                       input-name="date"
                       {{-- datetime-local vyžaduje specifický datetime formát, jinak hodnotu nezobrazí --}}
                       input-value="{{date('Y-m-d\TH:i:s', strtotime($event->date))}}"
                       required

        />
        <x-forms.input input-type="number" label-text="Cena" placeholder="Cena (pouze číslo)" input-id="price"
                       input-name="price" :input-value="$event->entrance_fee" required/>
        <x-forms.text-area label-text="Popis" placeholder="Popis" input-id="description" input-name="description"
                           :input-value="$event->description" required/>
        <div class="d-flex justify-content-end w-100 mt-3">
            <a href="/events" class="btn btn-secondary me-3">
                Zrušit změny a vrátit se na seznam
            </a>
            <x-forms.submit-button btn-text="Potvrdit změny"/>
        </div>
    </form>
@endsection


