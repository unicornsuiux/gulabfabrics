@extends('layout.master')

@section('meta_title', 'About Us')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" /> 
@append

@section('bodyClass',"")

@section('content')
<section class="inner-banner theme_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="heading-h2 mb-4" data-aos="fade-down" data-aos-duration="1000">About Us</h1>
                <img src="{{asset('img/svg/arrow-down.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section-sideby theme_bg pt-0">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="img_lenght">
                    <img src="{{asset('img/textile-img-6.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <p class="subtitle">beauty & comfort</p>
                    <h2 class="heading-h2">Choose Our New Home Textile Collection</h2>
                    <p class="my-4">
                        Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>
                    <ul class="theme_list mb-5">
                        <li>Top-Quality Materials</li>
                        <li>Innovative Printing Techniques</li>
                        <li>Sustainable and Eco-Friendly</li>
                        <li>Quick Turnaround Times</li>
                        <li>End-to-End Manufacturing Services</li>
                    </ul>
                    <a href="" class="th_btn">Find Out More</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('common.why-choose-us')
@include('common.bg-video')
@include('common.testimonail')
@include('common.cta')  
@endsection