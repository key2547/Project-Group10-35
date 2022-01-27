<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
        <h1 class="logo me-auto me-lg-0"><a href="index.html">Thai Massage Shop</a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
        </nav>
        <!-- .navbar -->
        @if (Auth::check())

            <a class="book-a-table-btn scrollto d-none d-lg-flex" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                <span class="menu-icon">
                    <i class="mdi mdi-logout text-danger"></i>
                </span>
                <span class="menu-title">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="book-a-table-btn scrollto d-none d-lg-flex">Admin</a>
        @endif
    </div>
</header>
<!-- End Header -->
