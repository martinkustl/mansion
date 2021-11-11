@extends ('layouts.page')

@section('title')
    Domovská stránka
@endsection

@section('content')

@section('pageHeading')
    Co se u nás dělo
@endsection

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" basePath="home"/>

<a class="events--link" href="/events">
    Více o nadcházejících akcích najdete na tomto odkazu
</a>

@endsection
