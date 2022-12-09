@include('admin.includes.header-mobile')

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ url('admin/images/logo2.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-tachometer"></i>Home</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="{{ request()->is('home-admin*') ? 'active' : '' }}">
                            <a href="{{ route('home-carousel') }}">Carousel</a>
                        </li>
                        <li class="{{ request()->is('home-feature*') ? 'active' : '' }}">
                            <a href="{{ route('home-feature') }}">Feature</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('home-article*') ? 'active' : '' }}">
                    <a href="{{ route('home-article') }}">
                        <i class="fa fa-quote-left"></i>Article</a>
                </li>
                <li class="{{ request()->is('home-portofolio*') ? 'active' : '' }}">
                    <a href="{{ route('home-portofolio') }}">
                        <i class="fa fa-copy"></i></i>Portofolio</a>
                </li>
                <li class="{{ request()->is('home-message*') ? 'active' : '' }}">
                    <a href="{{ route('home-message') }}">
                        <i class="fa fa-envelope"></i></i>Message</a>
                </li>
                <li class="{{ request()->is('home-sosmed*') ? 'active' : '' }}">
                    <a href="{{ route('home-sosmed') }}">
                        <i class="fa fa-commenting"></i></i>Social Media</a>
                </li>
                <li class="{{ request()->is('home-team*') ? 'active' : '' }}">
                    <a href="{{ route('home-team') }}">
                        <i class="fa fa-users"></i></i>Team</a>
                </li>
                <li class="{{ request()->is('home-contact_us*') ? 'active' : '' }}">
                    <a href="{{ route('home-contact_us') }}">
                        <i class="fa fa-address-card"></i></i>Contact Us</a>
                </li>
                <li class="{{ request()->is('home-about_us*') ? 'active' : '' }}">
                    <a href="{{ route('home-about_us') }}">
                        <i class="fa fa-hashtag"></i></i>About Us</a>
                </li>
                
                
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->