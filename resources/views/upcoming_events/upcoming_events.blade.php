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
            data-bs-target="#exampleModal">
        <span class="me-2 md-fs-5">
        Filtr dle typu akce
        </span>
        <i class="bi bi-filter c-filter-icon"></i>
    </button>
</div>

<!-- Modal Form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <form class="modal-content" method="GET" action="/events">
            <header class="modal-header d-flex justify-content-center">
                <h3 class="modal-title text-center" id="exampleModalLabel">Filtr dle typu akce</h3>
            </header>
            <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                <fieldset class="d-flex justify-content-center align-items-center flex-row c-radios-wrapper">
                    @foreach($eventTypes as $eventType)
                        <div class="form-check">
                            <input class="form-check-input c-radio-button" type="radio"
                                   id={{$eventType->type}} name="eventType" value="{{$eventType->type}}"
                                {{$selectedEventType === $eventType->type ? 'checked' : ''}}
                            >
                            <label class="form-check-label" for={{$eventType->type}}>
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
            <footer class="modal-footer d-flex justify-content-center align-items-center flex-row">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zavřít</button>
                <button type="submit" class="btn btn-primary c-btn-primary">Filtrovat</button>
            </footer>
        </form>
    </div>
</div>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" basePath="events"/>

@endsection
