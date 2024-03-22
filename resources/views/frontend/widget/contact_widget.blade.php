@php

$footer = App\Models\Footer::find(1);

@endphp


<div class="widget">
    <h5 class="title">Contact Information</h5>
    <ul class="sidebar__contact__info">
        <li><span>Address :</span>{{ $footer->address }}</li>
        <li><span>Mail :</span> {{ $footer->email }}</li>
        <li><span>Phone :</span> {{ $footer->phone_no }}</li>
        <li><span>Fax id :</span> </li>
    </ul>
    <ul class="sidebar__contact__social">
        <li><a href="{{ $footer->instagram }}"><i class="fab fa-instagram"></i></a></li>
        <li><a href="{{ $footer->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="{{ $footer->facebook }}"><i class="fab fa-facebook"></i></a></li>
        <li><a href="{{ $footer->youtube }}"><i class="fab fa-youtube"></i></a></li>
        <li><a href="{{ $footer->twitter }}"><i class="fab fa-twitter"></i></a></li>
    </ul>
</div>