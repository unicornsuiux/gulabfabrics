
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
<section class="inner-banner theme_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="heading-h2 mb-4" data-aos="fade-down" data-aos-duration="1000">FAQ</h1>
                <img src="{{asset('img/svg/arrow-down.svg')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section-faq theme_bg pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          What is the minimum order quantity?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          We offer flexible minimum order quantities to meet different business needs. Our MOQ typically starts at [X units], but we’re happy to discuss options based on your requirements.
                        </div>
                      </div>
                    </div>
                  
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          What types of fabrics do you offer?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          We provide a wide range of premium fabrics, including cotton, polyester, blends, sustainable materials, and more. Our team can help you choose the best material based on your design and usage needs.
                        </div>
                      </div>
                    </div>
                  
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Can I see a sample before placing a bulk order?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          Yes, we offer sample production to help you see and feel the quality of your design before committing to a full order. Sample charges may apply and can be discussed with our team.
                        </div>
                      </div>
                    </div>
                  
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                          Do you provide design services?
                        </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          Absolutely! Our design team can work with you to bring your vision to life. From initial concept to final touches, we’ll help create designs that align with your brand.
                        </div>
                      </div>
                    </div>
                  
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                          How long does production typically take?
                        </button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          Production timelines vary depending on order size and complexity, but we aim to complete most orders within [X weeks]. For specific timelines, feel free to reach out, and we’ll provide an estimate based on your project.
                        </div>
                      </div>
                    </div>
                  
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                          What printing methods do you use?
                        </button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          We offer a variety of printing options, including screen printing, direct-to-garment (DTG) printing, heat transfer, and embroidery. Each method is carefully selected based on the design requirements and fabric type.
                        </div>
                      </div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</section>

@include('common.testimonail')
@include('common.cta')  
@endsection