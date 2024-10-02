@extends('frontend.layouts.layout')
@section('content')
    {{-- swiper-container --}}
    <section class="mySwiper-main mb-5">
        @include('frontend.pages.components.swiper-container')
    </section>
    {{-- intro --}}
    <section class="mb-5">
        @include('frontend.pages.components.welcome-card')
    </section>
    <section class="mb-5">
        @include('frontend.pages.components.our-services')
    </section>
    <section class="mb-5">
        @include('frontend.pages.components.choose')
    </section>
    <section class="mb-5">
        @include('frontend.pages.components.testimonials')
    </section>
@endsection
