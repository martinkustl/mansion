<header class="main-header">
    <nav class="main-nav">
        <div class="mobile-navbar-controls-wrapper" id="app-logo-wrapper">
            <a class="main-nav__heading-link" href="/">

                <img class="main-nav__logo" src="/images/app-logo.png" alt="zámeček" />
                <h1 class="main-nav__heading">
                    Zámeček
                </h1>
            </a>
            <button class="burger-bar" onclick="toggleNavbar()" aria-label="otevřít menu">
                {{-- <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-times close" aria-hidden="true"></i>
                x --}}
                <i class="bi bi-list"></i>
                <i class="bi bi-x-lg close-burger"></i>
            </button>
        </div>
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a class="main-nav__link {{(request()->is('home*') ? 'main-nav__link--active' : '')}}" href="/">Domů</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link {{(request()->is('events*') ? 'main-nav__link--active' : '')}}" href="/events">Akce</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link {{(request()->is('facilities*') ? 'main-nav__link--active' : '')}}" href="/facilities">Zařízení</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link {{(request()->is('about*') ? 'main-nav__link--active' : '')}}" href="/about">Recenze</a>
            </li>
            <li class="main-nav__item">
                <a class="main-nav__link {{(request()->is('contact*') ? 'main-nav__link--active' : '')}}" href="/contact">Kontakt</a>
            </li>
        </ul>
    </nav>
</header>