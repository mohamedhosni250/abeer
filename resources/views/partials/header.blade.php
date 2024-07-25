    <!-- header style one -->
    {{-- <header class="header-one v-2 header--sticky"> --}}
    <header class="header-one v-2 ">
        <div class="header-top-one-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div style="padding: 10px;" class="header-top-one">
                            <div class="left-information">
                                <a href="mailto:info@abeereducation.com" class="email"><i
                                        class="fa-light fa-envelope"></i>info@abeereducation.com</a>
                                <a href="tel:+201025492088" class="email"><i
                                        class="fa-light fa-phone"></i>+201025492088</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-one-wrapper">
                        <div class="left-side-header">
                            <a href="/" class="logo-area">
                                <img width="180px" src="{{ asset('logo.png') }}" alt="logo">
                            </a>

                            <div class="main-nav-one">
                                <nav>
                                    <ul>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('/') }}" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('universities*') }}"
                                                href="{{ route('universities.index') }}">Universities In Malaysia</a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('leads*') }}"
                                                href="{{ route('leads') }}">Registration
                                            </a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('courses*') }}"
                                                href="{{ route('courses') }}">
                                                Courses</a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('blog*') }}"
                                                href="{{ route('posts') }}">Blog
                                            </a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('about*') }}"
                                                href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link {{ isActive('contact*') }}"
                                                href="{{ route('contact') }}">Contact us</a>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right-area-one">

                            <div class="buttons-area">
                                @auth
                                    <a href="{{ route('dashboard') }}" class="rts-btn btn-border">Dashboard</a>
                                    <a href="{{ route('logout') }}" class="rts-btn btn-primary"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="rts-btn btn-border">Log In</a>
                                    <a href="{{ route('register') }}" class="rts-btn btn-primary">Sign Up</a>
                                @endauth
                            </div>
                            <div class="menu-btn" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
