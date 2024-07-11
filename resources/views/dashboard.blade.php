@extends('layouts.app')

@section('content')
    <div class="dashboardarea sp_bottom_100">
        <div class="container-fluid full__width__padding">
            <div class="row">
                <div class="col-xl-12">
                    <div class="dashboardarea__wraper">
                        <div class="dashboardarea__img">
                            <div class="dashboardarea__inner student__dashboard__inner">
                                <div class="dashboardarea__left">
                                    <div class="dashboardarea__left__img">
                                        <img loading="lazy" src="{{ asset('img/teacher/teacher__2.png') }}" alt="">
                                    </div>
                                    <div class="dashboardarea__left__content">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-book-open">
                                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                                </svg>
                                                9 Courses Enrolled
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-award">
                                                    <circle cx="12" cy="8" r="7"></circle>
                                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                                </svg>
                                                8 Certificates
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dashboardarea__right">
                                    <div class="dashboardarea__right__button">
                                        <a class="default__button" href="create-course.html">Enroll A New Course
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard">
            <div class="container-fluid full__width__padding">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="dashboard__inner sticky-top">
                            <div class="dashboard__nav__title">
                                <h6>Welcome, {{ Auth::user()->name }}</h6>
                            </div>
                            <div class="dashboard__nav">
                                <ul>
                                    <li>
                                        <a href="{{ route('dashboard') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>


                                    <a href="#">


                                        <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                                            @csrf
                                        </form>
                                        <li>
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-log-out">
                                                    <path
                                                        d="M9 21V9a3 3 0 0 0-3-3H5a3 3 0 0 0-3 3v12h7zM15 17h8M17 17l-2 2m0-2l2-2m0 2H9">
                                                    </path>
                                                </svg>
                                                Logout
                                            </a>
                                        </li>
                                    </a>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="dashboard__content__wraper">
                            <!-- Additional content goes here -->
                            @yield('dashboard-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
