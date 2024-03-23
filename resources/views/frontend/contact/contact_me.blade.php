@extends('frontend.front_master')

@php

$footer = App\Models\Footer::find(1);

@endphp


@section('main')

@section('title')
    Contact | MES
@endsection



        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5116813207405!2d3.3544849962192784!3d6.583133564257484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9216e51ceb85%3A0x22242cc8658e2b19!2sGRENVILLE%20SCHOOLS!5e0!3m2!1sen!2sng!4v1711141872469!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
                    <form method="post" action="{{ route('store.message') }}" class="contact__form">
                    	@csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input name="name" type="text" placeholder="Enter your name*" value="{{ old('name', request()->input('name'))}}">
                                @error('name')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Enter your mail*" value="{{ old('email')}}">
                                @error('email')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="subject" type="text" placeholder="Enter your subject*" value="{{ old('subject') }}">
                                @error('subject')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="phone" type="text" placeholder="Enter your Phone No*" value="{{ old('phone') }}">
                                @error('phone')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="address" type="text" placeholder="Enter your Address*" value="{{ old('address') }}">
                                @error('address')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input name="budget" type="text" placeholder="Your Budget*" value="{{ old('budget') }}">
                                @error('budget')
                                	<div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <textarea name="message" id="message" placeholder="Enter your message*">{{ old('message') }}</textarea>
                        @error('message')
                        	<div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn">send message</button>
                    </form>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-info-area -->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">address line</h4>
                                    <span>{{ $footer->address }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Phone Number</h4>
                                    <span>{{ $footer->phone_no }}</span>
                                    <span>+1255 - 568 - 6523</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Mail Address</h4>
                                    <span>{{ $footer->email }}</span>
                                    <span>info@mrichtec.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-info-area-end -->

            <!-- contact-area -->
            @include('frontend.body.contact')
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

@endsection