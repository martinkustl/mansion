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
    Hledáte prostor pro pohádkovou svatbu či firemní teambuilding? Nebo si chcete občas jen užít koncert, divadlo nebo
    divokou párty? V takovém případě je Zámeček místo přesně pro vás! V případě zájmu o klidné ubytování s wellness, s
    možností několika druhů sportovišť a dalších volnočasových aktivit v podobě plně vybavené knihovny či kulečníku, má
    komplex Zámeček díky své rozhlehlosti a rozmanitosti také mnoho, co nabídnout.
</p>
<hr class="home-hr mt-5 mb-5"/>
<h2 class="home-page--sub-heading mb-4">Podívejte se, co se u nás dělo</h2>

{{-- Vykreslení eventů --}}
<x-event-list :events="$events" base-path="home"/>

<a class="events--link-b" href="{{url("/events")}}">
    Více o nadcházejících akcích najdete na tomto odkazu
</a>

@endsection
