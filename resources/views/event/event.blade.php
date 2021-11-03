@extends ('layouts.detail')

@section('title')
Detail události
@endsection

@section('content')
<article class="event-detail--wrapper">
<h2 class="event-detail--title">{{$event->title}}</h2>
<h3 class="event-detail--date">
    {{date('d.m.Y H:i', strtotime($event->date))}}
</h3>
<h3 class="event-detail--price">{{$event->entrance_fee}} Kč</h3>

<img src="/images/events/{{$event->static_file_id.$event->extension}}" class="event-detail--image" alt="{{$event->name}}">
{{-- <p>{{!! nl2br($event->description) !!}}</p> --}}

<p>
    {{-- V textu je třeba respektovat line breaky. To ale nejde s defaultním Laravel espacovaním (ochrana proti XSS) --}}
    {{-- Proto je třeba použít !!, což Laravelu říká, aby neescapoval html tagy. Následně převést \n na line breaky (nl2br) --}}
    {{-- A následně text vyescapovat manualně (e) --}}
    {!! nl2br(e($event->description)) !!}
</p>
</article>
@endsection