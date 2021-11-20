@extends ('layouts.detail')

@section('title')
    Zařízení
@endsection
@section('content')
    <article class="event-detail--wrapper">
        <h2 class="detail-page--title">{{$facility->name}}</h2>
        <div id="facilityCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($facility->images as $image)
                    <button type="button" data-bs-target="#facilityCarousel"
                            data-bs-slide-to={{"$loop->index"}} aria-label={{"Slide $loop->index+1"}}
                            @class([
                                'active' => $loop->index == 0
                            ])
                                />
                @endforeach
            </div>
            <ul class="carousel-inner">
                @php

                    @endphp
                @foreach ($facility->images as $image)
                    <li
                        @class([
                            'carousel-item',
                            'active' => $loop->index == 0
                        ])
                    >
                        <img class="d-block w-100 c-carousel-img" alt="{{$image->imgName}}"
                             src="/images/{{$image->folderName.'/'.$image->staticFileId.$image->extension}}"/>
                    </li>
                @endforeach
            </ul>
            <button class="carousel-control-prev" type="button" data-bs-target="#facilityCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Předchozí</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#facilityCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">další</span>
            </button>
        </div>
        <div>
            {!! nl2br(e($facility->description)) !!}
        </div>
    </article>
@endsection

<script>

</script>
