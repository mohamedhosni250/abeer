@extends('layouts.main')

@section('title', 'Universities')

@section('content')
    <main class="main_wrapper overflow-hidden">
        <div>
            <div class="theme__shadow__circle"></div>
            <div class="theme__shadow__circle shadow__right"></div>
        </div>

        <div class="blogarea__2 sp_top_100 sp_bottom_100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">

                        <div class="blog__details__content__wraper">

                            <div class="container text-center mt-5">
                                <h2 class="headline">
                                    <span class="support-text"> </span><br> Our <span class="highlight">Universities
                                    </span>
                                </h2>
                                <div class="line"></div>
                            </div>
                            <livewire:universities />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
