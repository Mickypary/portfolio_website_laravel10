@extends('frontend.front_master')


@section('main')

@section('title')
    Service | MES
@endsection


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">{{ $editData->title }}</h2>
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
            <section class="services__details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="services__details__thumb">
                                <img src="{{ asset($editData->detail_image) }}" alt="">
                            </div>
                            <div class="services__details__content">
                                <h2 class="title">{{ $editData->title }}</h2>
                                <p>{!! $editData->long_description !!}</p>
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
                                <p>{!! $editData->other_text !!}</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="services__sidebar">
                                <!-- Start Get In Touch -->
                                @include('frontend.widget.get_in_touch')
                                <!-- End Get In Touch -->
                                
                                <!-- Start Contact -->
                                @include('frontend.widget.contact_widget')
                                <!-- End Contact -->
                            </aside>
                        </div>
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
