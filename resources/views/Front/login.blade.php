@extends("layouts.app")


@section('header')
    <title>Login Cinema</title>
@endsection

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/front/images/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/front/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/front/css/util.css">
    <link rel="stylesheet" type="text/css" href="/front/css/main.css">
    <!--===============================================================================================-->

@section("content")
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>
{{--                    <form method="POST" action="{{ route('/Front/welcome') }}">--}}
{{--                        @csrf--}}
                        <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
                            <input id="email" class="input100" type="email" name="email" placeholder="email" >
{{--                            @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>--}}
                            {{--@error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror--}}
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
                            <input class="input100"  id="password" type="password" name="password" placeholder="Password" >
{{--                                   @error('password') is-invalid @enderror required autocomplete="current-password">--}}
                           {{-- @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror--}}
                        </div>

                       {{-- <div class="container-login100-form-btn">
                            <form method="POST" action="{{ route('welcome') }}">
                                @csrf
                            <button type="submit" class="login100-form-btn">
                                {{ __('Login') }}
                            </button>--}}
                        <div class="col-sm-3">
{{--                            <form method="POST" action="{{ route('/Front/welcome') }}">--}}
{{--                                @csrf--}}
                                {{--            <button type="submit" class="btn btn-primary">--}}
                                <button type="submit" class="btn btn-warning  btn-block " >
                                    {{ __('Login') }}
                                </button>

                            <span class="txt1">
                          @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            </span>
                        </div>

                        <div class="w-full text-center">
                    <form method="POST" action="{{ route('Register') }}">
                            <a href="Register" class="txt3">
                                Sign Up
                            </a>

                   </form>
                        </div>
                    <div class="login100-more" style="background-image: url('/front/images/login.jpg');"></div>

                    <div id="dropDownSelect1"></div>
            @endsection
            @section("script")
                    <!--===============================================================================================-->
                        <script src="../../../vendor/jquery/jquery-3.2.1.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="../../../vendor/animsition/js/animsition.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="../../../vendor/bootstrap/js/popper.js"></script>
                        <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="../../../vendor/select2/select2.min.js"></script>
                    <!--===============================================================================================-->
                    <script src="../../../vendor/daterangepicker/moment.min.js"></script>
                    <script src="../../../vendor/daterangepicker/daterangepicker.js"></script>
                    <!--===============================================================================================-->
                    <script src="../../../vendor/countdowntime/countdowntime.js"></script>
                    <!--===============================================================================================-->
                    <script src="/front/js/main.js"></script>


                       {{-- <script>
                            $(".selection-2").select2({
                                minimumResultsForSearch: 20,
                                dropdownParent: $('#dropDownSelect1')
                            });

                        </script>--}}
                @endsection






