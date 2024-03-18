
@php

$about = App\Models\About::findOrFail(1);
$multi_image = App\Models\MultiImage::all();





@endphp







<section id="aboutSection" class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="about__icons__wrap">
                                @foreach($multi_image as $item)
                                <li>
                                    <img class="light" src="{{ asset($item->multi_image) }}" alt="XD">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <div class="section__title">
                                    <span class="sub-title">01 - About me</span>
                                    <h2 class="title">{{ $about->title }}</h2>
                                </div>
                                <div class="about__exp">
                                    <div class="about__exp__icon">
                                        <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                                    </div>
                                    <div class="about__exp__content">
                                        <p>{{ $about->short_title }}</p>
                                    </div>
                                </div>
                                <p class="desc">{{ $about->short_description }}</p>
                                <a href="{{ route('download.resume', $about->resume) }}" target="_blank" class="btn" style="background-color: #09A4B5;">Download my resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>