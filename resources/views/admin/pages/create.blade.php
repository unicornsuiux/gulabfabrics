@extends('admin/layouts/default')

@section('title')
Page
@parent
@stop

@section('content')
@include('common.errors')
<section class="content-header">
    <h1>Page</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
    
            </a>
        </li>
        <li> <a href="{{ route('admin.pages.index') }}">Pages</a></li>
        <li class="active">Create </li>
    </ol>
</section>
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
     <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Create New  Page
                </h4></div>
            <br />
            <div class="card-body">
            {!! Form::open(['route' => 'admin.pages.store']) !!}

                @include('admin.pages.fields')

            {!! Form::close() !!}
        </div>
      </div>
      </div>
 </div>

</div>
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
    <!-- generate slug -->
<script>
   $( document ).ready(function() {
        $('#heading').on('focusout',function(){
            var slug=$(this).val().toLowerCase().replace(/ /g,"-"); // remove all multiple spaces
            slug=slug.replace(/[^a-zA-Z0-9]/g,'-');//remove specila characters
            slug=slug.replace(/-{2,}/g, '-');//remove double dashes
            $('#slug').val(slug);
        });
    });
</script>
@stop
