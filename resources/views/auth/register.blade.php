<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{asset('css/reg.css')}}">
</head>

    @extends('layouts.app')

    @section('content')
    <div class="container" ><br>
        <div class="row justify-content-center" >
            <div class="col-md-10">
                <div class="card" id="contenedor">
                    <div class="card-header" id="titulo">{{ __('Registro de Usuario') }}</div>

                    <div class="card-body" id="area">
                        <hr id="linea">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row" >
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body"><br>
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end" id="texto">{{ __('Nombre') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end" id="texto">{{ __('Gmail de Usuario') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end" id="texto">{{ __('Constraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end" id="texto">{{ __('Confirmar Contraseña') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="rol" class="col-md-4 col-form-label text-md-end" id="texto">{{ __('Rol') }}</label>

                                            <div class="col-md-6">
                                                <div class="dropdown">
                                                    <select class="form-select" id="validationCustom04" required>
                                                        <option selected disabled value="">Rol de Usuario</option>
                                                        <option>Administrador</option>
                                                        <!--<option>Acudiente</option>
                                                        
                                                        <option>Estudiante</option>
                                                        <option>Docente</option> -->                                       
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" >
                                <div class="card">
                                    <div class="card-body">
                                        <img src="http://localhost/Programas/softAbraham/public/img/logo.webp" alt="imagen en blanco" width="235">
                                    </div>
                                </div><br>
                                <div class="row mb-0" >
                                      <div class="col-md-6 offset-md-4" >
                                        <button type="submit" id="btn" class="boton-personalizado">
                                            {{ __('Registrar') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr id="linea">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


</html>

