
@extends('layout.master')

@section('meta_title', 'Gulab Fabric Contact Page')
@section('meta_description', '')
@section('canonical',"")

@section('script_css')
<meta itemprop="image" content="">
<meta property="og:image" content="" />
<meta name="twitter:image" content="" /> 
@append

@section('bodyClass',"")

@section('content')
{!! NoCaptcha::renderJs() !!}
<section class="inner-banner theme_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="heading-h2 mb-4" data-aos="fade-down" data-aos-duration="1000">Contact Us</h1>
                <img src="{{asset('img/svg/arrow-down.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="theme_bg pt-0">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li><small>{{ $error }}</small></li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-5">
                <p class="subtitle text-dark">Contact Us</p>
                <h2 class="heading-h2 mb-4">Have Questions? Get in Touch!</h2>
                <p class="mb-4">
                    Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
                </p>
                <ul class="contct-info">
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="#">785 15h Street, Office 478 Berlin</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+18408412569">+1 840 841 25 69</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:hello@gulab-fabric.com">hello@gulab-fabric.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <form action="{{ route('post-contact-save') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <div class="input-wrap">
                                <img src="{{asset('img/svg/user.svg')}}" alt="">
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="input-wrap">
                                <img src="{{asset('img/svg/email.svg')}}" alt="">
                                <input type="text" name="email" value="{{old('email')}}" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="input-wrap">
                                <img src="{{asset('img/svg/phone.svg')}}" alt="">
                                <input type="text" name="phone" value="{{old('phone')}}" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <div class="input-wrap">
                                <img src="{{asset('img/svg/info.svg')}}" alt="">
                                <input type="text" name="subject" value="{{old('subject')}}" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <div class="input-wrap">
                                <img src="{{asset('img/svg/pencil.svg')}}" alt="">
                                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control">{{old('message')}}</textarea>
                            </div>
                        </div>
                        <div class="input-effect">
                            {!! app('captcha')->display() !!} @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="th_btn border-0"><i class="fa-regular fa-paper-plane"></i> &nbsp; Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="p-0 ratio ratio-16x9 theme_bg">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13600.19739125485!2d74.2701160526704!3d31.550260287200864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190333d0909891%3A0xf801ee84a0f03d9a!2sGulshan-e-Ravi%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1730576166605!5m2!1sen!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@include('common.testimonail')
@include('common.cta')  
@endsection