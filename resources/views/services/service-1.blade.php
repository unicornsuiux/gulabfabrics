
@extends('layout.master')

@section('meta_title', 'Gulab Fabric Services Detail Page')
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
                <h1 class="heading-h2 mb-4" data-aos="fade-down" data-aos-duration="1000">Custom Clothing</h1>
                <img src="{{asset('img/svg/arrow-down.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section-faq theme_bg pt-0">
    <div class="container">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger mt-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li><small>{{ $error }}</small></li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-lg-8">
                <div class="content">
                    <p>
                        Mauris eu nisi eget nisi imperdiet vestibulum. Nunc sodales vehicula risus. Suspendisse id mauris sodales, blandit tortor eu, sodales justo. Morbi tincidunt, ante vel suscipit volutpat, turpis enim volutpSectetur adipiscing elit, sed do eiusm onsectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore. Ut vel placerat eros, eu tincidunt velit. Consectetur adipiscing elit, adipiscing elit, sed do.
                    </p>
                    <div class="mb-4">
                        <img src="{{asset('img/textile-img-6.jpg')}}" class="obj_fit" alt="">
                    </div>
                    <h4>Sed ut perspiciatis unde omnis iste natus et</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                    <div class="row my-4">
                        <div class="col-lg-6">
                            <img src="{{asset('img/s1.jpg')}}" class="obj_fit" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('img/s2.jpg')}}" class="obj_fit" alt="">
                        </div>
                    </div>
                    <p>
                        Aliquam laoreet sed neque ac vehicula. Cras congue eros nec quam laoreet, in viverra erat bibendum. Cras turpis urna, vulputate at est vitae, posuere lobortis erat.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                    <h4>Aliquam quis lobortis quam</h4>
                    <p>
                        Curabitur pellentesque odio magna, id malesuada arcu sodales ut. Sed sed quam ut ex bibendum commodo id id magna. Aliquam sed ligula sed ante blandit volutpat. Ut bibendum, nisi et mattis vulputate, odio arcu aliquet metus, nec dapibus risus risus quis lectus.
                    </p>
                    <p>                        
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                    <p>
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-aside">
                    <h4 class="mb-4">Get in Touch</h4>
                    @include('common.contact-form')
                    <h4 class="mt-4">Contact Info</h4>
                    <ul class="contct-info mt-4">
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
            </div>
        </div>
    </div>
</section>

@include('common.testimonail')
@include('common.cta')  
@endsection