<article>
    <section class="card c-review-card">
        <header class="card-header c-review-header">
            <div class="row">
                <h3 class="card-title col-auto mb-0 c-review-heading align-self-center">
                    {{$name}}
                </h3>
                <div class="rating-view col-md-auto mb-1 mb-md-0" aria-label="{{$rating}} z 5 hvězd. Hodnocení">
                    @for($i = 0; $i < 5; $i++)
                        <span
                    @class([
                        'filled-star' => $i < $rating
                    ])
                    >☆</span>
                    @endfor
                </div>
                <h4 class="card-subtitle c-review-date col align-self-center text-md-end font-weight-bold">
                    {{ $createdAt }}
                </h4>
            </div>
        </header>
        <div class="card-body c-review-body ps-4">
            <p>
                {{$review}}
            </p>
            @auth
                <div class="d-flex align-items-end justify-content-end review-buttons--wrapper">
                    @if(!$answer)
                        <button onclick="onAnswerReviewButtonClick({{$id}})" class="btn border me-2"
                                aria-label="Odpovědět">
                            <i class="bi bi-reply-fill"></i>
                        </button>
                    @endisset
                    <button
                        class="btn border"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteReviewModal{{$id}}"
                        aria-label="Smazat recenzi"
                    >
                        <i class="bi bi-trash"></i>
                    </button>
                    <x-delete-item-modal
                        modal-id="deleteReviewModal{{$id}}"
                        modal-title-id="deleteReviewModalTitle"
                        :item-id="$id"
                        modal-heading-text="Potvrzení smazání hodnocení"
                        modal-text="Opravdu chcete smazat hodnocení od {{$name}}?"
                        input-name="reviewId"
                        submit-btn-text="Smazat hodnocení"
                        form-action-url="/reviews/{{$id}}"
                    />
                </div>
            @endauth
        </div>
    </section>
    @if($answer || Auth::check())
        <section id="review-answer-{{$id}}"
            @class([
                       'card',
                       'c-review-card',
                       'c-review-card--answer',
                       'ms-4',
                       'mt-2',
                       'review--open' => $answer !== null
                   ])
        >
            <header class="card-header c-card-header--answer">
                <div class="row d-flex flex-md-row">
                    <h3 class="card-title col-auto c-review-heading align-self-start mb-2 mb-md-0">
                        Admin pro: {{$name}}
                    </h3>
                    <h4 class="card-subtitle c-review-date__answer col align-self-center text-md-end font-weight-bold">
                        {{ $answeredAt }}
                    </h4>
                </div>
            </header>
            <form class="card-body ps-4" method="POST" action="/reviews/{{$id}}">
                @method('PUT')
                @csrf
                @auth
                    <x-forms.text-area label-text="Odpověď" placeholder="Odpověď na hodnocení"
                                       input-id="answer-{{$id}}"
                                       input-name="answer"
                                       input-value="{{$answer}}"
                                       required
                    />
                @endauth
                @guest
                    <p>
                        {{$answer}}
                    </p>
                @endguest
                @auth
                    <div class="d-flex align-items-end justify-content-end mt-2 c-review-answer--footer">
                        <x-forms.submit-button btn-text="Odpovědět"/>
                    </div>
                @endauth
            </form>
        </section>
    @endif
</article>
