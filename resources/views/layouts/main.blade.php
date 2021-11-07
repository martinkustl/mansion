<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="/css/variables.css" rel="stylesheet"/>
    <link href="/css/main.css" rel="stylesheet"/>
    <link href="/css/layout/navbar.css" rel="stylesheet"/>
    <link href="/css/components/card.css" rel="stylesheet"/>
    <link href="/css/components/review.css" rel="stylesheet"/>
    <link href="/css/components/event-list.css" rel="stylesheet"/>

</head>

<body>
@include('layouts.navbar')
<div id="content-container">
    <main>
        @yield('page-content')
        {{-- <h2 class="page-heading">@yield('pageHeading')</h2> --}}
        {{-- @yield('content') --}}
    </main>
    @include('layouts.footer')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="/js/navbar.js"></script>
<script src="/js/rating.js"></script>
</body>

</html>
