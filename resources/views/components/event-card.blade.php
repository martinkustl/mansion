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
    @auth
        <aside class="d-flex flex-md-column card--aside">
            @if($isEditable === true)
                <a href="{{$basePath}}/{{$eventId}}/edit"
                   class="event-detail--edit-link flex-grow-1 d-flex justify-content-center align-items-center"
                   aria-label="Editovat akci">
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
                    data-bs-target="#deleteEventModal{{$eventId}}"
                    aria-label="Smazat akci"
            >
                <i class="bi bi-trash"></i>
            </button>
            <x-delete-item-modal
                modal-id="deleteEventModal{{$eventId}}"
                modal-title-id="deleteEventModalTitle"
                :item-id="$eventId"
                modal-heading-text="Potvrzení smazání akce"
                modal-text="Opravdu chcete smazat událost {{$title}}?"
                input-name="eventId"
                submit-btn-text="Smazat událost"
                form-action-url="/{{$basePath}}/{{$eventId}}"
            />
        </aside>
    @endauth
</li>
