<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<<<<<<< HEAD
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
=======
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

		 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
</head>
<body>

    <div class="limiter">
        
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
                    <span class="login100-form-title p-b-29">
                        <img src="{{asset('img/logosiglo21.png')}}" alt="">
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="focus-input100" data-placeholder="Correo"></span>                    
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                        <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span class="focus-input100" data-placeholder="Contraseña"></span>
                        
                    </div>
                    <div class="error-message ">
                    @error('email')
                        @php
                            $errorMessage1 = $message; // Almacena el mensaje de error en una variable
                        @endphp
                        <div class="alert alert-danger" role="alert">
                        <button type="button" class="close btn-danger" data-dismiss="alert">&times;</button>
                        <strong>{{ $errorMessage1 }}</strong>
>>>>>>> angela
                        </div>
                        
                    @enderror
                    @error('password')
                        @php
                            $errorMessage2 = $message; // Almacena el mensaje de error en una variable
                        @endphp
                        <strong>{{ $errorMessage2 }}</strong>
                    @enderror
                </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                  <b>{{ __('Iniciar sesión') }}</b>  
                            </button>
                            
                        </div>

                    </div>
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidó su contraseña?') }}
                                    </a>
                        @endif
                </form>
            </div>
        </div>
    </div>
	
</body>


<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>


<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('vendor/select2/select2.min.js')}}"></script>

<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>

<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</html>