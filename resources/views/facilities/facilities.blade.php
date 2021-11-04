@extends ('layouts.page')

@section('title')
Zařízení
@endsection

@section('content')

@section('pageHeading')
Prostory a vyžití
@endsection
{{-- <x-event-list :events="$events" basePath="home"/> --}}
<ul class="event-list">
    @foreach ($facilities as $facility)
    {{-- Cesta k obrázku je tvořena jako /folderName/id obrázku.extension --}}
    <a class="event-list__link" href="facilities/{{$facility->id}}"> 
        <article>
            <x-facility-card :name="$facility->name" :description="$facility->description" :imgPath="$facility->folderName.'/'.$facility->staticFileId.$facility->extension" :imgName="$facility->imgName"/>
        </article>
    </a>
    @endforeach
</ul>


@endsection