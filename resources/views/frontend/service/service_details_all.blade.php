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
                                <h2 class="title">Services</h2>
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

            <!-- services-details-area -->
            <section class="services">
                <div class="container">
                    <div class="services__title__wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="section__title">
                                    <span class="sub-title">02 - my Services</span>
                                    <h2 class="title">Creates amazing digital experiences</h2>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-4">
                                <div class="services__arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 services__active">
                        @foreach($allData as $item)
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="{{ route('service.details', $item->id) }}"><img src="{{ asset($item->main_image) }}" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="{{ asset($item->icon) }}" alt="">
                                        <!-- <img class="dark" src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt=""> -->
                                    </div>
                                    <h3 class="title"><a href="{{ route('service.details', $item->id) }}">{{ $item->title }}</a></h3>
                                    <p>{!! Str::limit($item->short_description, 90);  !!}</p>
                                    
                                    <a href="{{ route('service.details', $item->id) }}" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </section>
            <!-- services-details-area-end -->


            <!-- contact-area -->
            @include('frontend.body.contact')
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->



@endsection
