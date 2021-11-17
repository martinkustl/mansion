@extends ('layouts.page')

@section('title')
    Akce
@endsection

@section('content')

@section('pageHeading')
    Nadcházející akce
@endsection

<!-- Button trigger modal -->

<div class="d-flex justify-content-center">
    <button type="button"
            class="btn btn-primary c-btn-primary c-btn-filter w-100 mb-3 col justify-self-center align-middle d-flex justify-content-between align-items-center"
            data-bs-toggle="modal"
            data-bs-target="#filterModal">
        <span class="me-2 md-fs-5">
        Filtr dle typu akce
        </span>
        <i class="bi bi-filter c-filter-icon"></i>
    </button>
</div>
<x-centered-modal id="filterModal" labeledBy="filterModalTitle">
    <form class="modal-content" method="GET" action="/events">
        @csrf
        <div class="modal-header d-flex justify-content-center">
            <h3 class="modal-title text-center" id="filterModalTitle">Filtr dle typu akce</h3>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center flex-column">
            <fieldset class="d-flex justify-content-center align-items-center flex-row c-radios-wrapper">
                <select class="form-select" aria-label="multiple select" name="eventType">
                    @foreach($eventTypes as $eventType)
                        <option
                            value="{{$eventType->type}}" {{$selectedEventType === $eventType->type ? 'selected' : ''}}>{{$eventType->name}}</option>
                    @endforeach
                    <option value="" {{!$selectedEventType ? 'selected' : ''}}>Vše</option>
                </select>
            </fieldset>
        </div>
        <div class="modal-footer d-flex justify-content-center align-items-center flex-row">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavřít</button>
            <button type="submit" class="btn btn-primary c-btn-primary">Filtrovat</button>
        </div>
    </form>
</x-centered-modal>

@auth
    <form class="c-form c-new-event--form mb-3" action="/events" method="POST" enctype="multipart/form-data"
          id="new-event-form">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">
                <label id="eventImageLabel" for="eventImage" class="w-100 h-100"
                       style="cursor: pointer; border: 1px dashed black; display: flex; align-items: center; justify-content: center; position: relative; min-height: 200px">
                <span>
                    Nahrajte obrázek akce
                </span>
                </label>
                <input type="file" name="eventImage" id="eventImage" onchange="readInput(this)"
                       style="position: absolute; opacity:0; z-index: -1; width: 0;" required>

                @error("eventImage")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-8 c-form--inputs-wrapper">
                <x-forms.input inputType="text" labelText="Název" placeholder="Název" inputId="title"
                               inputName="title" required/>
                <label class="w-auto" style="white-space: nowrap; font-size: 1rem; margin-bottom: 0;"
                       for="eventType">Typ akce
                </label>
                <select class="form-select w-100" aria-label="multiple select" name="eventType">
                    @foreach($eventTypes as $eventType)
                        <option
                            value="{{$eventType->id}}" {{$selectedEventType === $eventType->type ? 'selected' : ''}}>{{$eventType->name}}</option>
                    @endforeach
                    <option value="" {{!$selectedEventType ? 'selected' : ''}}>Vše</option>
                </select>
                @error("eventType")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <x-forms.input inputType="datetime-local" labelText="Datum" placeholder="Datum ve formátu DD.MM.YYYY"
                               inputId="date" inputName="date" required/>
                <x-forms.input inputType="number" labelText="Cena" placeholder="Cena (pouze číslo)" inputId="price"
                               inputName="price" required/>
                <x-forms.text-area labelText="Popis" placeholder="Popis" inputId="description" inputName="description"
                                   required/>
            </div>
        </div>
        <div class="d-flex justify-content-end w-100 mt-3">
            <x-forms.submit-button btnText="Vytvořit"/>
        </div>
    </form>
@endauth



{{-- Vykreslení eventů --}}
<x-event-list :events="$events" basePath="events" isEditable="true"/>
<div style="height: 3rem">
    {{ $events->links("") }}
</div>


{{-- TODO - RESET FORM?? --}}
{{--<script>--}}
{{--    function resetForm() {--}}
{{--        const form = document.querySelector("#new-event-form");--}}
{{--        form.reset();--}}
{{--        const inputLabel = document.querySelector('#eventImageLabel')--}}
{{--        inputLabel.innerHTML = ''--}}
{{--        inputLabel.insertAdjacentHTML('afterbegin', `--}}
{{--            <span>Nahrajte obrázek akce</span>--}}
{{--        `)--}}
{{--    }--}}
{{--</script>--}}

@endsection
