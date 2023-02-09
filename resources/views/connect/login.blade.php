@extends('connect.template')
@section('title','Pagina de Login')

@section('contenido')
<div class="box box-login">
    <div class="header">
        <a href="{{url('/')}}">
            <img src="{{url('/static/images/logo.png')}}" alt="">
        </a>
    </div>
    <div class="inside">
        {!! Form::open(['url'=>'/login'])!!}  

    <div class="input-group margin16">
      <div class="input-group-text"><i class="fa fa-envelope-open-text"></i></div>
    {!! Form::email('email', null, ['class' => 'form-control','placeholder'=>'Ingresa tu Correo Electronico']) !!}
      
    </div>
    <div class="input-group margin16">
        <div class="input-group-text"><i class="fas fa-key"></i></div>
      {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Ingresa tu Contraseña']) !!}
        
    </div>
    <div class="input-group margin16">
       {!! Form::submit('Ingresar', ['class'=>'btn btn-success']) !!}  
    </div>
    {!! Form::close() !!}

    @include('connect.alerts')
    
    <div class="margin16 footer">
        <a href="{{url('/register')}}">Registrarse</a>
        <a href="{{url('/recover')}}">Olvidadste tu COntraseña</a>
    </div>
    </div>
    
</div>
@stop