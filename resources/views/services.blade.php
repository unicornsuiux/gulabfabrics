
@extends('layout.master')

@section('meta_title', 'Gulab Fabric Services Page')
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
                <h1 class="heading-h2 mb-4" data-aos="fade-down" data-aos-duration="1000">Services</h1>
                <img src="{{asset('img/svg/arrow-down.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section-produts theme_bg pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <p class="subtitle text-dark">What We Offer</p>
                        <h2 class="heading-h2">Our huge range of made-to-measure clothing and home textile offers a variety of solutions and styles</h2>
                    </div>
                </div>
                @include('common.products')
            </div>
        </div>
    </div>
</section>
@include('common.services')
@include('common.cta')  
@endsection