@extends ('layouts.page')

@section('title')
    Domovská stránka
@endsection

@section('content')

@section('pageHeading')
    Domovská stránka
@endsection
<p class="home-page--welcome-text">
    Vítejne na stránkách Záměčku, kde se pořádají zajímavé společenské akce.
</p>
<hr class="home-hr mt-5 mb-5"/>
<h3 class="home-page--sub-heading mb-4">Podívejte se, co se u nás dělo</h3>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" basePath="home"/>

<a class="events--link" href="/events">
    Více o nadcházejících akcích najdete na tomto odkazu
</a>

@endsection
