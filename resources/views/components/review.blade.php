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
        </div>
    </section>
    @if($answer)
        <section class="card c-review-card c-review-card--answer ms-4 mt-2">
            <header class="card-header c-card-header--answer">
                <div class="row d-flex flex-column">
                    <h3 class="card-title col-auto mb-0 c-review-heading align-self-start mb-2">
                        Admin to {{$name}}
                    </h3>
                    <h4 class="card-subtitle c-review-date__answer col align-self-center text-md-end font-weight-bold">
                        {{ $answeredAt }}
                    </h4>
                </div>
            </header>
            <div class="card-body ps-4">
                <p>
                    {{$answer}}
                </p>
            </div>
        </section>
    @endif
</article>
