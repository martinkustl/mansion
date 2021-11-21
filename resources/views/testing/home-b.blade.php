@extends ('layouts.page')

@section('description')
    <meta name="description" content="">
@endsection

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
<h2 class="home-page--sub-heading mb-4">Podívejte se, co se u nás dělo</h2>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" base-path="home"/>

<a class="events--link-b" href="/events">
    Více o nadcházejících akcích najdete na tomto odkazu
</a>

@endsection
