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
    Hledáte prostor pro pohádkovou svatbu či firemní teambuilding? Nebo si chcete občas jen užít koncert, divadlo nebo
    divokou párty? V takovém případě je Zámeček místo přesně pro vás! V případě zájmu o klidné ubytování s wellness, s
    možností několika druhů sportovišť a dalších volnočasových aktivit v podobě plně vybavené knihovny či kulečníku, má
    komplex Zámeček díky své rozhlehlosti a rozmanitosti také mnoho, co nabídnout.
</p>
<hr class="home-hr mt-5 mb-5"/>
<h3 class="home-page--sub-heading mb-4">Podívejte se, co se u nás dělo</h3>

<div class="d-flex align-items-center justify-content-center">
    <a class="events--link mb-4 p-2" id="upcoming-events-link" href="{{url("/events")}}">
        Více o nadcházejících akcích najdete na tomto odkazu
    </a>
</div>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" base-path="home"/>

@endsection
