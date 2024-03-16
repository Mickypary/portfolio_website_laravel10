@extends('frontend.front_master')


@section('main')





            <!-- banner-area -->
            @include('frontend.home_section.banner')
            <!-- banner-area-end -->

            <!-- about-area -->
            @include('frontend.home_section.about')
            <!-- about-area-end -->

            <!-- services-area -->
            @include('frontend.home_section.services')
            <!-- services-area-end -->

            <!-- work-process-area -->
            <section class="work__process">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section__title text-center">
                                <span class="sub-title">03 - Working Process</span>
                                <h2 class="title">A clear product design process is the basis of success</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row work__process__wrap">
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">Step - 01</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">Discover</h4>
                                    <p>Initial ideas or inspiration & Establishment of user needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">Step - 02</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">Define</h4>
                                    <p>Interpretation & Alignment of findings to project objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">Step - 03</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">Develop</h4>
                                    <p>Design-Led concept and Proposals hearted & assessed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="work__process__item">
                                <span class="work__process_step">Step - 04</span>
                                <div class="work__process__icon">
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}" alt="">
                                    <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
                                </div>
                                <div class="work__process__content">
                                    <h4 class="title">Deliver</h4>
                                    <p>Process outcomes finalised & Implemented</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- work-process-area-end -->

            <!-- portfolio-area -->
            @include('frontend.home_section.portfolio')
            <!-- portfolio-area-end -->

            <!-- partner-area -->
            @include('frontend.home_section.partner')
            <!-- partner-area-end -->

            <!-- testimonial-area -->
            @include('frontend.home_section.testimonial')
            <!-- testimonial-area-end -->

            <!-- blog-area -->
            <section class="blog">
                <div class="container">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb01.jpg') }}" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Story</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb02.jpg') }}" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Social</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog__post__item">
                                <div class="blog__post__thumb">
                                    <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_post_thumb03.jpg') }}" alt=""></a>
                                    <div class="blog__post__tags">
                                        <a href="blog.html">Work</a>
                                    </div>
                                </div>
                                <div class="blog__post__content">
                                    <span class="date">13 january 2021</span>
                                    <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
                                    <a href="blog-details.html" class="read__more">Read mORe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__button text-center">
                        <a href="blog.html" class="btn">more blog</a>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

            <!-- contact-area -->
            <section class="homeContact">
                <div class="container">
                    <div class="homeContact__wrap">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section__title">
                                    <span class="sub-title">07 - Say hello</span>
                                    <h2 class="title">Any questions? Feel free <br> to contact</h2>
                                </div>
                                <div class="homeContact__content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                    <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="homeContact__form">
                                    <form action="#">
                                        <input type="text" placeholder="Enter name*">
                                        <input type="email" placeholder="Enter mail*">
                                        <input type="number" placeholder="Enter number*">
                                        <textarea name="message" placeholder="Enter Massage*"></textarea>
                                        <button type="submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->




















@endsection