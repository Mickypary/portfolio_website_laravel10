@php

$partner = App\Models\HomePartners::find(1);
$partner_image = App\Models\HomePartnerImage::latest()->limit(6)->get();




@endphp



<section class="partner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="partner__logo__wrap">
                                @foreach($partner_image as $item)
                                <li>
                                    <img class="light" src="{{ asset($item->partner_image) }}" alt="">
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="partner__content">
                                <div class="section__title">
                                    <span class="sub-title">05 - partners</span>
                                    <h2 class="title">{{ $partner->title }}</h2>
                                </div>
                                <p>{{ $partner->short_description }}</p>
                                <a href="contact.html" class="btn" style="background-color: #09A4B5;">Start a conversation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>