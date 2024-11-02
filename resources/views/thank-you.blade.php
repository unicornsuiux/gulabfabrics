@extends('layout.master')

@section('bodyClass', '')

@section('meta_title', "")

@section('script_css')

@append

@section('content')

<section class="theme_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Thank You</h2>
                <p class="w-75 mx-auto">We have received your query. We will get back to you soon.</p>
                <div class="text-center">
                    <a href="{{route('get-home')}}" class="th_btn">Back To Home Page</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection