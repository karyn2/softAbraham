@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12" >
                
                @includeif('partials.errors')

                <div class="card card-default">
                    
                    <div class="card-header">
                    REGISTRO DE ESTUDIANTES
                        <!--COMENTADO ANTES DE VENTANA -->
                        <!--<span class="card-title">{{ __('Create') }} Usuario</span>-->
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <!--@include('usuario.form')-->

                                <form>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-2">
                                        <label for="validationDefault01">Nombre</label> 
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Ingrese Nombre" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationDefault02">Apellido</label>
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Ingrese Apellido" value="" required>
                                        </div>
                                        <div class="custom-file">
                                        Tipo de documento  
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Eliga archivo</label>
                                        </div>
                                        <br>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationDefaultUsername">Numero de documento </label> <br>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend2">#</span>
                                            </div>
                                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder="" aria-describedby="inputGroupPrepend2" required>
                                        </div>
                                        </div>
                                    </div>

                                            <label for="start">Fecha de Nacimiento:</label>

                                            <input type="date" id="start" name="trip-start"
                                                value="2018-07-22"
                                                min="2018-01-01" max="2018-12-31">
                                                <br>
                                            
                                            <div class="form-group">
                                                <div class="form-check">
                                                </label>
                                                </div> 

                                        <div class="col-md-4 mb-2">
                                        <label for="validationDefault01">Numero de teléfono</label> 
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="+57" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationDefault02">Correo electrónico</label> <br>
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="nombre@___.com" value="" required>
                                        </div>

                                        <div class="col-md-4 mb-2">
                                        <label for="validationDefault01">Direccion</label> 
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Cra 5 12-6" value="" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationDefault02">Nacionalidad</label> <br>
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Colombia " value="" required>
                                        </div>


                                    </div>
                                    
                                    <button class="btn btn-primary" type="button" disabled >Guardar</button>
                                    <a href="{{asset('/home')}}" type="button" class="btn btn-danger"> Cancelar</a>
                                    
                                    </form>
                                

                           
  







                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
