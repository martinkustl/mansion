@extends ('layouts.page')

@section('title')
    Zařízení
@endsection

@section('content')

@section('pageHeading')
    Prostory a vyžití
@endsection
{{-- <x-event-list :events="$events" basePath="home"/> --}}
<ul class="items-list">
    @foreach ($facilities as $facility)
        {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
        <li>
            <a class="event-list__link" href="facilities/{{$facility->id}}">
                <x-facility-card :name="$facility->name" :description="$facility->description"
                                 :img-path="$facility->folderName.'/'.$facility->staticFileId.$facility->extension"
                                 :img-name="$facility->imgName"/>
            </a>
        </li>
    @endforeach
</ul>


@endsection
