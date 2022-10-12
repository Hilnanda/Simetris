<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search"
                        placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">

                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">{{ count(auth()->user()->unreadNotifications) }}</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>You have {{ count(auth()->user()->unreadNotifications) }} Notifications</p>
                                </div>
                                @forelse (auth()->user()->unreadNotifications as $notifications)
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <a id="markAsRead" onclick="markNotificationAsRead()"
                                        href="{{ route('home-message') }}" class="content">
                                        <p>You got a new message</p>
                                        <span class="date">{{ $notifications->created_at }}</span>
                                    </a>
                                </div>
                                @empty
                                <div class="notifi__item">
                                    <div class="content">
                                        <p>No Unread Message</p>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ url('admin/images/logo1.png') }}" alt="Admin" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">Admin</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ url('admin/images/logo1.png') }}" alt="Admin" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">Admin</a>
                                        </h5>
                                        <span class="email">support@simetrisdigitalagency.com</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('home-category') }}">
                                            <i class="fa fa-th-list"></i>Category Article</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('home-category-portofolio') }}">
                                            <i class="fa fa-th-list"></i>Category Portofolio</a>
                                    </div>

                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->
