@extends ('layouts.page')

@section('title')
Akce
@endsection

@section('content')

@section('pageHeading')
Nadcházející akce
@endsection

{{-- Vykreslení eventů --}}
<x-event-list :events="$events"/>

@endsection