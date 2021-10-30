@extends ('layouts.main')

@section('title')
Domovská stránka
@endsection

@section('content')

{{-- Vykreslení eventů --}}
@foreach ($events as $event)
    <x-card :title="$event->title" :description="$event->description" :date="date('d.m.Y H:i', strtotime($event->date))" />
@endforeach


@endsection