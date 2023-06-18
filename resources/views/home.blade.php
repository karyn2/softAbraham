@extends('layouts.app')
  <link rel="stylesheet" href="{{ mix('resources\css\app.css') }}">
@section('content')

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="row">
      <div class="col-md-4">
        <a href="pagina_opcion_1.html" class="menu-option" style="background-color: #32D2F6;">
        <img src="{{ asset('storage\images\edtinst.png') }}" alt="matricula" class="icono-sidebar">
          <div>Editar<br>Datos de institución</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="pagina_opcion_2.html" class="menu-option" style="background-color: #419BED;">
        <img src="{{ asset('storage\images\confCurso.png') }}" alt="matricula" class="icono-sidebar">
          <div>Configurar Cursos</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="pagina_opcion_3.html" class="menu-option" style="background-color: #EB4FAD;">
        <img src="{{ asset('storage\images\asgMatPro.png') }}" alt="matricula" class="icono-sidebar">
          <div>Asigna<br>Materias Profesores</div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <a href="pagina_opcion_4.html" class="menu-option" style="background-color: #419BED;">
        <img src="{{ asset('storage\images\agrDocEst.png') }}" alt="matricula" class="icono-sidebar">
          <div>Agregar<br>Docentes y Estudiantes</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="pagina_opcion_5.html" class="menu-option" style="background-color: #EB4FAD;">
        <img src="{{ asset('storage\images\verEst.png') }}" alt="matricula" class="icono-sidebar">
          <div>Ver<br>Estudiantes</div>
        </a>
      </div>
      <div class="col-md-4">
        <a href="pagina_opcion_6.html" class="menu-option" style="background-color: #32D2F6">
        <img src="{{ asset('storage\images\conHorCla.png') }}" alt="matricula" class="icono-sidebar">
          <div>Configurar<br>Horarios de clase</div>
        </a>
      </div>
    </div>
  </div>
@endsection
