<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        @yield('description') @yield('opengraph')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=UA-213772451-1"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag("js", new Date());

            gtag("config", "UA-213772451-1");
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-5QZBM8B");
        </script>
        <!-- End Google Tag Manager -->
        <script src="https://www.googleoptimize.com/optimize.js?id=OPT-TTCLZ3P"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Italiana&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
        />
        <link href="{{asset('/css/variables.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/global.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/layout/navbar.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/layout/main.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/components/card.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/components/review.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/components/event-list.css')}}" rel="stylesheet" />
        <link href="{{asset('/css/components/input.css')}}" rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""
        />
        <script
            src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""
        ></script>
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-5QZBM8B"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        @include('layouts.navbar')
        <div id="content-container">
            <main>
                @auth
                <form method="POST" action="./logout">
                    @csrf
                    <button
                        type="submit"
                        class="btn logout--button"
                        aria-label="smazat akci"
                    >
                        <i class="bi bi-power"></i>
                    </button>
                </form>
                @endauth @yield('page-content') {{--
                <h2 class="page-heading">@yield('pageHeading')</h2>
                --}}
                {{-- @yield('content') --}}
            </main>
            @include('layouts.footer')
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <script src="{{asset('/js/navbar.js')}}"></script>
        <script src="{{asset('/js/rating.js')}}"></script>
        <script src="{{asset('/js/review.js')}}"></script>
        <script src="{{asset('/js/image-upload.js')}}"></script>
        <script src="{{asset('/js/new-event.js')}}"></script>
    </body>
</html>
