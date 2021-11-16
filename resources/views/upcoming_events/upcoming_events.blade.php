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
                @foreach($eventTypes as $eventType)
                    <div class="form-check">
                        <input class="form-check-input c-radio-button" type="radio"
                               id="{{$eventType->type}}" name="eventType" value="{{$eventType->type}}"
                            {{$selectedEventType === $eventType->type ? 'checked' : ''}}
                        >
                        <label class="form-check-label" for="{{$eventType->type}}">
                            {{$eventType->name}}
                        </label>
                    </div>
                @endforeach
                <div class="form-check">
                    <input class="form-check-input c-radio-button" type="radio"
                           id="all" name="eventType" value=""
                        {{!$selectedEventType ? 'checked' : ''}}
                    >
                    <label class="form-check-label" for="all">
                        Vše
                    </label>
                </div>
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
                       style="position: absolute; opacity:0; z-index: -1">

                @error("eventImage")
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-8 c-form--inputs-wrapper">
                <x-forms.input inputType="text" labelText="Název" placeholder="Název" inputId="title"
                               inputName="title"/>
                <fieldset class="d-flex align-items-center flex-row c-radios-wrapper">
                    <legend class="w-auto" style="white-space: nowrap; font-size: 1rem; margin-bottom: 0;">Typ akce
                    </legend>
                    <div class="d-flex w-100 align-items-center flex-row c-radios-wrapper">
                        @foreach($eventTypes as $eventType)
                            <div class="form-check">
                                <input class="form-check-input c-radio-button" type="radio"
                                       id="{{$eventType->type}}" name="eventType" value="{{$eventType->id}}"
                                >
                                <label class="form-check-label" for="{{$eventType->type}}">
                                    {{$eventType->name}}
                                </label>
                            </div>
                        @endforeach
                        @error("eventType")
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>
                <x-forms.input inputType="date" labelText="Datum" placeholder="Datum ve formátu DD.MM.YYYY"
                               inputId="date"
                               inputName="date"/>
                <x-forms.input inputType="number" labelText="Cena" placeholder="Cena (pouze číslo)" inputId="price"
                               inputName="price"/>
                <x-forms.text-area labelText="Popis" placeholder="Popis" inputId="description" inputName="description"/>
            </div>
        </div>
        <div class="d-flex justify-content-end w-100 mt-3">
            <x-forms.submit-button btnText="Vytvořit"/>
        </div>
    </form>
@endauth



{{-- Vykreslení eventů --}}
<x-event-list :events="$events" basePath="events"/>
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
