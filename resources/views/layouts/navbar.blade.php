<header class="main-header">
    <nav class="main-nav">
        <div class="mobile-navbar-controls-wrapper" id="app-logo-wrapper">
            <a class="main-nav__heading-link" href="{{url('/')}}">
                <img
                    class="main-nav__logo"
                    src="{{asset('/images/app-logo.png')}}"
                    alt="zámeček"
                />
                <h1 class="main-nav__heading">Zámeček</h1>
            </a>
            <button
                class="burger-bar"
                onclick="toggleNavbar()"
                aria-label="otevřít menu"
            >
                <i class="bi bi-list"></i>
                <i class="bi bi-x-lg close-burger"></i>
            </button>
        </div>
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a
                    class="main-nav__link {{(request()->is('home*') ? 'main-nav__link--active' : '')}}"
                    href="{{url('/')}}"
                >Domů</a
                >
            </li>
            <li class="main-nav__item">
                <a
                    class="main-nav__link {{(request()->is('events*') ? 'main-nav__link--active' : '')}}"
                    href="{{url('/events')}}"
                >Akce</a
                >
            </li>
            <li class="main-nav__item">
                <a
                    class="main-nav__link {{(request()->is('facilities*') ? 'main-nav__link--active' : '')}}"
                    href="{{url('/facilities')}}"
                >Zařízení</a
                >
            </li>
            <li class="main-nav__item">
                <a
                    class="main-nav__link {{(request()->is('reviews*') ? 'main-nav__link--active' : '')}}"
                    href="{{url('/reviews')}}"
                >Recenze</a
                >
            </li>
            <li class="main-nav__item">
                <a
                    class="main-nav__link {{(request()->is('contacts*') ? 'main-nav__link--active' : '')}}"
                    href="{{url('/contacts')}}"
                >Kontakty</a
                >
            </li>
        </ul>
    </nav>
</header>
