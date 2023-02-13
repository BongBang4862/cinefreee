@extends('connect.template')
@section('title','Añadir Pelicula')

@section('contenido')
<div class="row">
    <div class="col-5">
        formulario
    </div>
    <div class="col-7">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="inside">
                {!! Form::open(['url'=>'admin/movies/add','files' => true])!!}  
        
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="title">Title:</label>
                </div>
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
        
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="year">Año de Estreno:</label>
                </div>
                {!! Form::number('year', null, ['class'=>'form-control']) !!}
            </div>
        
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="duration">Duracion: </label>
                </div>
                {!! Form::number('duration', null, ['class'=>'form-control']) !!}
            </div>
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="calfication">Calificacion: </label>
                </div>
                {!! Form::number('calfication', null, ['class'=>'form-control']) !!}
            </div>
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="sinopsis">Sinopsis:s</label>
                </div>
                {!! Form::textarea('sinopsis', null, ['class'=>'form-control']) !!}
            </div>
        
            <div class="col-md-3">
                <label for="poster">Imagen Destacada</label>
                <div class="custom-file">
                    {!! Form::file('poster', ['class'=>'form-control custom-file-input', 'id' => 'customFile', 'accept' => 'image/*']) !!}
                    <label for="customFile" class="custom-file-label">Elige la Imagen</label>
                </div>
            </div>
        
            <div class="input-group margin16">
                <div class="input-group-text"><i class="fa fa-envelope-open-text"></i>
                    <label for="triler">Triler:</label>
                </div>
                  {!! Form::text('triler', null, ['class'=>'form-control']) !!}
              </div>
            
            <div class="input-group margin16">
               {!! Form::submit('Subir Pelicula', ['class'=>'btn btn-success']) !!}  
            </div>
            {!! Form::close() !!}
        
            @include('connect.alerts')
            
            </div>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-7">
        lista
    </div>
    <div class="col-5">
        pelicula
    </div>
</div>

@stop