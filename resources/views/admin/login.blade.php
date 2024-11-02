<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('admin-assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/all.css') }}">
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/pages/login.css') }}" />
    <link href="{{ asset('vendors/iCheck/css/square/blue.css') }}" rel="stylesheet" />
    <!-- end of page level css -->

    <style>
        .help-block {
            color: #a94442;
        }

        .change_link .btn-warning {
            color: #fff;
        }

        #wrapper label {
            color: rgb(64, 92, 96);
            font-weight: 700;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-12 mx-auto">
                <div id="notific">
                    
                </div>
            </div>
        </div>
        <div class="row vertical-offset-100">
            <!-- Notifications -->
            <div class="col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4 mx-auto">

                <div id="container_demo">
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <a class="hiddenanchor" id="toforgot"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form animate border-0 card card-body form shadow-none bg-white">
                            <form action="{{ route('signin') }}" autocomplete="on" method="post" role="form"
                                id="login_form" class="my-3">
                                <h3>
                                    <img src="{{ asset('img/gulab-fabric-logo.png') }}" class="" alt="eProperty Report">
                                    <br>Log In</h3>
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                    <label style="margin-bottom:0px;" for="email" class="uname control-label"> <i
                                            class="livicon" data-name="mail" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        E-mail
                                    </label>
                                    <input id="email" name="email" type="email" placeholder="E-mail"
                                        value="{!! old('email') !!}" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                    <label style="margin-bottom:0px;" for="password" class="youpasswd"> <i
                                            class="livicon" data-name="key" data-size="16" data-loop="true"
                                            data-c="#3c8dbc" data-hc="#3c8dbc"></i>
                                        Password
                                    </label>
                                    <input id="password" name="password" type="password"
                                        placeholder="Enter a password" />
                                    <div class="col-sm-12">
                                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="remember-me" id="remember-me" value="remember-me"
                                            class="square-blue" />
                                        Keep me logged in
                                    </label>
                                </div>
                                <p class="login button">
                                    <input type="submit" value="Log In" class="btn btn-success btn-block" />
                                </p>
                       
                            </form>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-assets/js/pages/login.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
</body>

</html>
