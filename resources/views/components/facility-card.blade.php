<li class="card mb-3 c-card">
    <div class="row g-0">
        <div class="col-md-4 ">
            <img src="/images/{{$imgPath}}" class="img-fluid rounded-start c-card-image" alt="{{$imgName}}">
        </div>
        <article class="col-md-8 card-body">
            {{-- <div class="card-body"> --}}
                <h3 class="card-title c-card-title">{{ $name}}</h3>
                <div class="c-card-text--wrapper">
                    <p class="card-text">{{$description}}</p>
                </div>
            {{-- </div> --}}
        </article>
    </div>
</li>