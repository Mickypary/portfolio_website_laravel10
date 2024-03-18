@php

$portfolio_all = App\Models\Portfolio::all();
$portfolio_apps = App\Models\Portfolio::where('portfolio_category','apps')->get();
$portfolio_website = App\Models\Portfolio::where('portfolio_category','website')->get();
$portfolio_dashboard = App\Models\Portfolio::where('portfolio_category','dashboard')->get();
$portfolio_landing = App\Models\Portfolio::where('portfolio_category','landing')->get();
$portfolio_branding = App\Models\Portfolio::where('portfolio_category','branding')->get();
$portfolio_graphic = App\Models\Portfolio::where('portfolio_category','graphic')->get();


@endphp



<section class="portfolio">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section__title text-center">
                                <span class="sub-title">04 - Portfolio</span>
                                <h2 class="title">All creative work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-12">
                            <ul class="nav nav-tabs portfolio__nav" id="portfolioTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button"
                                        role="tab" aria-controls="all" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website" type="button"
                                        role="tab" aria-controls="website" aria-selected="false">website</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="apps-tab" data-bs-toggle="tab" data-bs-target="#apps" type="button" role="tab" aria-controls="apps" aria-selected="false">mobile apps</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard" type="button"
                                        role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="landing-tab" data-bs-toggle="tab" data-bs-target="#landing" type="button"
                                        role="tab" aria-controls="landing" aria-selected="false">landing page</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button"
                                        role="tab" aria-controls="branding" aria-selected="false">Branding</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="graphic-tab" data-bs-toggle="tab" data-bs-target="#graphic" type="button"
                                        role="tab" aria-controls="graphic" aria-selected="false">Graphic Design</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="portfolioTabContent">
                    <div class="tab-pane show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                    	@foreach($portfolio_all as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="{{ route('portfolio.details', $item->id) }}">{{ $item->portfolio_title }}</a></h4>
                                                <a href="{{ route('portfolio.details', $item->id) }}" class="link">See More</a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="website" role="tabpanel" aria-labelledby="website-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_website as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="apps" role="tabpanel" aria-labelledby="apps-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_apps as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_dashboard as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="landing" role="tabpanel" aria-labelledby="landing-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_landing as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_branding as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="graphic" role="tabpanel" aria-labelledby="graphic-tab">
                        <div class="container">
                            <div class="row gx-0 justify-content-center">
                                <div class="col">
                                    <div class="portfolio__active">
                                        @foreach($portfolio_graphic as $item)
                                        <div class="portfolio__item">
                                            <div class="portfolio__thumb">
                                                <img src="{{ asset($item->portfolio_image) }}" alt="">
                                            </div>
                                            <div class="portfolio__overlay__content">
                                                <span>{{ $item->portfolio_name }}</span>
                                                <h4 class="title"><a href="portfolio-details.html">{{ $item->portfolio_title }}</a></h4>
                                                <a href="portfolio-details.html" class="link">Case Study</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>