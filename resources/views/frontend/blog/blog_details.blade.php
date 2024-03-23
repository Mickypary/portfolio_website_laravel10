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
                                <h2 class="title">{{ $blogs->blog_title }}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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


            <!-- blog-details-area -->
            <section class="standard__blog blog__details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="standard__blog__post">
                                <div class="standard__blog__thumb">
                                    <img src="{{ asset($blogs->detail_image) }}" alt="">
                                </div>
                                <div class="blog__details__content services__details__content">
                                    <ul class="blog__post__meta">
                                        <li><i class="fal fa-calendar-alt"></i>{{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</li>
                                        <li><i class="fal fa-comments-alt"></i> <a href="#">Comment (08)</a></li>
                                        <li class="post-share"><a href="#"><i class="fal fa-share-all"></i> (18)</a></li>
                                    </ul>
                                    <h2 class="title">{{ $blogs->blog_title }}</h2>
                                    <p>{!! $blogs->blog_description !!}</p>

                                    <div class="services__details__img">
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <iframe width="560" height="315" src="{{ $blogs->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            </div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="services__details__img">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <img src="{{ asset($blogs->wrap_image) }}" alt="">
                                            </div>
                                            <div class="col-sm-6">
                                                <img src="{{ asset($blogs->wrap_image2) }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <h2 class="small-title">Nature of Business Strategy</h2> -->
                                    <p>{{ $blogs->other_text }}</p>
                                </div>
                                <div class="blog__details__bottom">
                                    <ul class="blog__details__tag">
                                        <li class="title">Tag:</li>
                                        <li class="tags-list">
                                            <a href="#">{{ $blogs->blog_tags }}</a>
                                        </li>
                                    </ul>
                                    <ul class="blog__details__social">
                                        <li class="title">Share :</li>
                                        <li class="social-icons">
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-linkedin"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="blog__next__prev">
                                    <div class="row justify-content-between">
                                        <div class="col-xl-5 col-md-6">
                                            <div class="blog__next__prev__item">
                                                <h4 class="title">Previous Post</h4>
                                                <div class="blog__next__prev__post">
                                                    <div class="blog__next__prev__thumb">
                                                        <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_prev.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="blog__next__prev__content">
                                                        <h5 class="title"><a href="blog-details.html">Digital Marketing Agency Pricing Guide.</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-md-6">
                                            <div class="blog__next__prev__item next_post text-end">
                                                <h4 class="title">Next Post</h4>
                                                <div class="blog__next__prev__post">
                                                    <div class="blog__next__prev__thumb">
                                                        <a href="blog-details.html"><img src="{{ asset('frontend/assets/img/blog/blog_next.jpg') }}" alt=""></a>
                                                    </div>
                                                    <div class="blog__next__prev__content">
                                                        <h5 class="title"><a href="blog-details.html">App Prototyping
                                                        Types, Example & Usages.</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="comment comment__wrap">
                                    <div class="comment__title">
                                        <h4 class="title">(04) Comment</h4>
                                    </div>
                                    <ul class="comment__list">
                                        <li class="comment__item">
                                            <div class="comment__thumb">
                                                <img src="{{ asset('frontend/assets/img/blog/comment_thumb01.png') }}" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__avatar__info">
                                                    <div class="info">
                                                        <h4 class="title">Rohan De Spond</h4>
                                                        <span class="date">25 january 2021</span>
                                                    </div>
                                                    <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                            </div>
                                        </li>
                                        <li class="comment__item children">
                                            <div class="comment__thumb">
                                                <img src="{{ asset('frontend/assets/img/blog/comment_thumb02.png') }}" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__avatar__info">
                                                    <div class="info">
                                                        <h4 class="title">Johan Ritaxon</h4>
                                                        <span class="date">25 january 2021</span>
                                                    </div>
                                                    <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages</p>
                                            </div>
                                        </li>
                                        <li class="comment__item">
                                            <div class="comment__thumb">
                                                <img src="{{ asset('frontend/assets/img/blog/comment_thumb03.png') }}" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__avatar__info">
                                                    <div class="info">
                                                        <h4 class="title">Alexardy Ditartina</h4>
                                                        <span class="date">25 january 2021</span>
                                                    </div>
                                                    <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages of Lorem Ipsum available, but the majority have</p>
                                            </div>
                                        </li>
                                        <li class="comment__item children">
                                            <div class="comment__thumb">
                                                <img src="{{ asset('frontend/assets/img/blog/comment_thumb04.png') }}" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__avatar__info">
                                                    <div class="info">
                                                        <h4 class="title">Rashedul islam Kabir</h4>
                                                        <span class="date">25 january 2021</span>
                                                    </div>
                                                    <a href="#" class="reply"><i class="far fa-reply-all"></i></a>
                                                </div>
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have. There are many variations of passages</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="comment__form">
                                    <div class="comment__title">
                                        <h4 class="title">Write your comment</h4>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Enter your name*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Enter your mail*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Enter your number*">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Website*">
                                            </div>
                                        </div>
                                        <textarea name="message" id="message" placeholder="Enter your Massage*"></textarea>
                                        <div class="form-grp checkbox-grp">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                        <button type="submit" class="btn">post a comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="blog__sidebar">
                                <div class="widget">
                                    <form action="" class="search-form">
                                        <input id="search" type="text" placeholder="Search">
                                        <button type="submit"><i class="fal fa-search"></i></button>
                                    </form>
                                </div>

                                <div class="widget">
                                    <h4 class="widget-title">Recent Blog</h4>
                                    <ul class="rc__post">
                                        <div class="alldata"> <!-- Js Hiding class -->
                                    	@foreach($recentblogs as $item)
                                        <li class="rc__post__item">
                                            <div class="rc__post__thumb">
                                                <a href="{{ route('blog.details', $item->id) }}"><img src="{{ asset($item->blog_thumb) }}" alt=""></a>
                                            </div>
                                            <div class="rc__post__content">
                                                <h5 class="title"><a href="{{ route('blog.details', $item->id) }}">{{ $item->blog_title }}</a></h5>
                                                <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                            </div>
                                        </li>

                                        

                                        @endforeach
                                    </div>

                                    <div class="searchdata">
                                        <li class="rc__post__item" >
                                            <div class="rc__post__thumb" id="Content">
                                                
                                            </div>
                                            <div class="rc__post__content" id="Content">
                                                
                                            </div>
                                        </li>
                                    </div>

                                        

                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">Categories</h4>
                                    <ul class="sidebar__cat">
                                    	@foreach($categories as $item)
                                        <li class="sidebar__cat__item"><a href="{{ route('blog.category', $item->blog_category_id) }}">{{ $item->category->blog_category }} ({{ $item->cat_count }})</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- <div class="widget">
                                    <h4 class="widget-title">Recent Comment</h4>
                                    <ul class="sidebar__comment">
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                        <li class="sidebar__comment__item">
                                            <a href="blog-details.html">Rasalina Sponde</a>
                                            <p>There are many variations of passages of lorem ipsum available, but the majority have</p>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="widget">
                                    <h4 class="widget-title">Popular Tags</h4>
                                    <ul class="sidebar__tags">
                                        @foreach($blog_tags as $item)
                                        <li><a href="">{{ $item->blog_tags }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-details-area-end -->


            <!-- contact-area -->
            @include('frontend.body.contact')
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->



        <script type="text/javascript">
            $(document).ready(function () {
                $('#search').on('keyup', function () {
                    var value = $(this).val();

                    if (value) {
                        $('.alldata').hide();
                        $('.searchdata').show();
                    }else{
                        $('.searchdata').hide();
                        $('.alldata').show();
                    }

                    $.ajax({
                        url: "{{ URL::to('search') }}",
                        type: "get",
                        data: {'search': value},

                        success: function (data) {
                            console.log(data);
                            $('#Content').html(data);
                            
                        }
                    });

                });
            });
        </script>






@endsection


