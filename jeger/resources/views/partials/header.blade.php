<header class="banner-image d-block w-100" style="background-image: url(https://images.ctfassets.net/kjc0jmow0idt/5xhkEC6z9m8u6aqEiccyke/507e2d6b05d315c5d4a730b17d6854c9/01-home.jpg?fm=webp&w=1366&q=66);">
    <!-- <div class="dark-overlay"></div> -->
    <div class="container h-100 ">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <a class="navbar-brand font-weight-bold lgoo" href="{{ route('home') }}"><img src="/images/logo-jager.png" class="logo-img"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="nav-link font-weight-bold" href="{{ route('home') }}">Add Receipt</a>
            </li>
            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="nav-link font-weight-bold" href="{{ route('about') }}">Admin log in</a>
            </li>
        </ul>
    </div>
</nav>
        <div class="row justify-content-center align-items-center h-75 text-white text-center">
            <div class="col-md-12">
                <img src="" alt="">
                @yield('heading')
            </div>
        </div>
    </div>
</header>