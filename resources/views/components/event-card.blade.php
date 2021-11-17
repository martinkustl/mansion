<li class="d-flex flex-column flex-md-row mb-3">
    <a class="event-list__link flex-grow-1" href="{{$basePath}}/{{$eventId}}">
        <article class="card c-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/images/{{$imgPath}}" class="img-fluid rounded-start c-card-image" alt="{{$imgName}}">
                </div>
                <div class="col-md-8 card-body d-flex flex-column">
                    <div>
                        <h3 class="card-title c-card-title">{{$title}}</h3>
                        <div class="c-card-text--wrapper">
                            <p class="card-text"><small class="c-card-date">{{$date}}</small></p>
                            <p class="card-text">{{$description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </a>
    <aside class="d-flex flex-column card--aside">
        @if($isEditable === true)
            <a href="{{$basePath}}/{{$eventId}}/edit"
               class="event-detail--edit-link flex-grow-1 d-flex justify-content-center align-items-center">
                <i class="bi bi-pencil"></i>
            </a>
    @endif
    <!-- Button trigger modal -->
        <button type="button"
                @class([
                    'btn',
                    'border',
                    'event-detail--delete-button',
                    'flex-grow-1',
                    'd-flex',
                    'justify-content-center',
                    'align-items-center',
                    'event-detail--delete-button__alone'=>$isEditable !== true
                ])
                data-bs-toggle="modal"
                data-bs-target="#deleteEventModal{{$eventId}}">
            <i class="bi bi-trash"></i>
        </button>
        <x-centered-modal id="deleteEventModal{{$eventId}}" labeledBy="deleteEventModalTitle">
            <div class="modal-header d-flex justify-content-center">
                <h3 class="modal-title text-center" id="deleteEventModalTitle">Potvrzení smazání akce</h3>
            </div>
            <form method="POST" action="/{{$basePath}}/{{$eventId}}">
                @csrf
                {{-- HTML formulář akceptuje pouze POST/GET, pro použití jiných metod je potřeba využít--}}
                {{-- laravel funkci method--}}
                @method('DELETE')
                <div class="modal-body">
                    <p>Opravdu chcete smazat událost {{$title}}?</p>
                    <input value="{{$eventId}}" name="eventId" type="hidden">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Zavřít
                    </button>
                    <input type="submit" class="btn btn-primary c-btn-primary" value="Smazat událost">
                </div>
            </form>
        </x-centered-modal>
    </aside>

</li>
