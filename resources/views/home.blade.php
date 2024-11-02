@extends('layout.master')

@section('meta_title', 'Gulab Fabric Home Page')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" /> 
@append

@section('bodyClass',"")

@section('content')
<div class="loader-wrapper">
    <div class="loader-wrapper-inner">
        <div class="dots-container">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
<section class="master-banner theme_bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h1 class="heading-h1 mb-0" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="2000">World Class Textile Producer with Impeccable Quality</h1>
            </div>
            <div class="col-lg-6">
                <div class="btn-group justify-content-lg-end justify-content-center">
                    <a href="{{route('get-about')}}" class="th_btn-outline" data-aos="fade-left" data-aos-delay="2000" data-aos-duration="2000">About Us</a>
                    <a href="{{route('get-services')}}" class="th_btn" data-aos="fade-left" data-aos-delay="2500" data-aos-duration="2000">Our Services</a>
                </div>
            </div>
        </div>
    </div>
    <div class="master-img">
        <img src="{{asset('img/banner/master-1.webp')}}" class="obj_fit" alt="">
    </div>
</section>
<section class="section-sideby theme_bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1 order-2 pe-lg-5" data-aos="fade-up" data-aos-duration="1000">
                <div class="img-lenght">
                    <img src="{{asset('img/about.jpg')}}" class="obj_fit" alt="">
                </div>
            </div>
            <div class="col-lg-6 pe-lg-4 order-lg-2 order-1 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <p class="subtitle">Premium Quality, Unmatched Craftsmanship</p>
                    <h2 class="heading-h2">Discover the Perfect Materials with Our Expertise</h2>
                    <p class="my-4">
                        We deeply value the trust you place in us! Our clients choose us time and again because they know our commitment to excellence. Our products and services consistently reflect the highest standards, combining quality, style, and durability.
                    </p>
                    <div class="list pb-3">
                        <h4 class="heading-h4">
                            <span class="count-nun">01.</span>
                            Exceptional Fabrics
                        </h4>
                    </div>
                    <div class="pt-4">
                        <h4 class="heading-h4">
                            <span class="count-nun">02.</span>
                            Contemporary Collections
                        </h4>
                    </div>
                    <div class="mt-5">
                        <a href="{{route('get-about')}}" class="th_btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('common.services')
<section class="section-offer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="subtitle text-center text-dark" data-aos="fade-down" data-aos-duration="1000">What We Offer</p>
                <h2 class="heading-h2 text-center" data-aos="fade-up" data-aos-duration="1000">Our huge range of made-to-measure clothing and home textiles offers a variety of solutions and</h2>
            </div>
        </div>
        @include('common.products')
    </div>
</section>
@include('common.why-choose-us')
@include('common.bg-video')
@include('common.testimonail')
@include('common.cta')  
@endsection