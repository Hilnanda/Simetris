<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ route('home') }}">
                        <img class="logo-img logo-img-main" src="{{ asset('img/logo.png') }}" alt="Asentus Logo">
                        <img class="logo-img logo-img-active" src="{{ asset('img/logo-dark.png') }}" alt="Asentus Logo">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('home*') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                        {{-- <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('pricing*') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a></li> --}}
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('about*') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('article*') ? 'active' : '' }}" href="{{ route('article') }}">Article</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('products*') ? 'active' : '' }}" href="{{ route('products') }}">Products</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('service*') ? 'active' : '' }}" href="{{ route('service') }}">Service</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('faq*') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-item-child nav-item-hover {{ request()->is('contact*') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>