@extends('frontend.front_master')


@section('main')


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">{{ $editData->portfolio_title }}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                        <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="services__details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="services__details__thumb">
                                <img src="{{ asset($editData->detail_image) }}" alt="">
                            </div>
                            <div class="services__details__content">
                                <h2 class="title">{{ $editData->portfolio_title }}</h2>
                                <p>{!! $editData->portfolio_description !!}</p>
                                <div class="services__details__img">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="{{ asset($editData->wrap_image1) }}" alt="">
                                        </div>
                                        <div class="col-sm-6">
                                            <img src="{{ asset($editData->wrap_image2) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p>{{ $editData->other_text }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="services__sidebar">
                                <div class="widget">
                                    <h5 class="title">Get in Touch</h5>
                                    <form action="#" class="sidebar__contact">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter your mail*">
                                        <textarea name="message" id="message" placeholder="Massage*"></textarea>
                                        <button type="submit" class="btn">send message</button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Project Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Date :</span> {{ date('F, Y', strtotime($editData->project_date)) }}</li>
                                        <li><span>Location :</span> {{ $editData->client_address }}</li>
                                        <li><span>Client :</span> {{ $editData->client_name }}</li>
                                        <li class="cagegory"><span>Category :</span>
                                            <a href="portfolio.html">{{ $editData->portfolio_category }},</a>
                                            <a href="portfolio.html">UI/UX</a>
                                        </li>
                                        <li><span>Project Link :</span> <a target="_blank" href="{{ $editData->project_link }}">{{ $editData->project_link }}</a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="title">Contact Information</h5>
                                    <ul class="sidebar__contact__info">
                                        <li><span>Address :</span> {{ $editData->client_address }}</li>
                                        <li><span>Mail :</span> {{ $editData->client_mail }}</li>
                                        <li><span>Phone :</span> {{ $editData->client_phone }}</li>
                                        <!-- <li><span>Fax id :</span> +9 659459 49594</li> -->
                                    </ul>
                                    <ul class="sidebar__contact__social">
                                        <li><a href="{{ $editData->twitter_handle }}"><i class="fab fa-twitter"></i></a></li>
                                        <!-- <li><a href="#"><i class="fab fa-behance"></i></a></li> -->
                                        <li><a href="{{ $editData->linkedin_handle }}"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="{{ $editData->instagram_handle }}"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{ $editData->facebook_handle }}"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="{{ $editData->youtube_handle }}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->


            <!-- contact-area -->
            @include('frontend.body.contact')
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->







@endsection

