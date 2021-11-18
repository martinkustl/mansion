@extends ('layouts.main')

@section('page-content')
    <a href="{{ url()->previous() }}" class="previous-page--link">Zpět</a>
    @yield('content')
@endsection
