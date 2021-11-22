@extends ('layouts.page')

@section('description')
    <meta name="description"
          content="Zámeček nabízí prostory pro svatby, welness, koncerty, divadla, párty, teambuildingy a další. Pojďte se podívat, co se na Zámečku v poslední době dělo.">
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

<div class="d-flex align-items-center justify-content-center">
    <a class="events--link mb-4 p-2" href="/events">
        Více o nadcházejících akcích najdete na tomto odkazu
    </a>
</div>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" base-path="home"/>

@endsection
