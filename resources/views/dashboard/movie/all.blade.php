@extends('connect.template')
    @section('title','Añadir Pelicula')
    @section('css')
        <link rel="stylesheet" href="{{url('/static/css/general.css')}}">
        <link rel="stylesheet" href="{{url('/static/css/modal.css')}}">
    @section('contenido')
    @include ('layouts.modal-agregar-movie')
    <div class="row">
        <div class="col-4">
           <div class="box">
                {!! Form::open(['url'=>'admin/movies/add','files' => true])!!} 
                <div class="search-movie">
                    {!! Form::text('movie', null, ['class'=>'form-control']) !!}
                    {!! Form::submit('Buscar Pelicula', ['class'=>'btn btn-success']) !!}  
                    <a id="btn-agregar-movie" href="" class="btn btn-success">
                        <i class="fa-solid fa-square-plus"></i>
                    </a>
                </div>
            {!! Form::close() !!}
            <table class="table table-striped">
                <thead>
                        <td width='60'>ID</td>
                        <td width='50'>Portada</td>
                        <td>Title</td>
                        <td width='80'>Opciones</td>
                </thead>
                <tbody>
                    @foreach ($movies as $m)
                        <tr>
                            <td>{{ $m->id}}</td>
                            <td>
                                <a data-fancybox="galery" href="{{url('/uploads/'.$m->file_path.'/'.$m->poster)}}">
                                    <img src="{{url('/uploads/'.$m->file_path.'/t_'.$m->poster)}}" width="50" alt="">
                                </a>
                            </td>
                            <td>{{ $m->title}}</td>
                            <td>
                                <div class="options">
                                    <a  data-toggle="tooltip" data-placement="top" title="Ver" href="{{url('/admin/movie/'.$m->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a  data-toggle="tooltip" data-placement="top" title="Editar" href="{{url('/admin/products/'.$m->id.'/edit')}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a data-toggle="tooltip" data-object="{{ $m->id}}" data-path="admin/products" data-action='restore' class="btn_delete" data-placement="top" title="Eliminar" href="">
                                        {{-- url('/admin/products/'.$p->id.'/delete') --}}
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6">
                        {!! $movies->render() !!} 
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>
        </div>
        <div class="col-8">
            <div class="movie box">
                <div class="portada ">
                    <img src="{{url('/uploads/'.$p->file_path.'/t_'.$p->poster)}}" alt="">
                </div>
                <div class="detalles">
                    <h2 class="title">{{$p->title}}</h2>
                    <span>Año de Estreno 2012</span>
                    <p class="sinopsis">Sinospsis: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, quo asperiores iste atque sunt deleniti magni ipsa culpa. Maiores unde cumque distinctio! Tempora magnam ipsum maxime iure, suscipit aliquam quia</p>
                    <span>Duration: 1:56 min </span>
                    <span>Calificacion: </span>
                    <div class="categorias card">
                        <div class="header">
                            Agregar Categoria<a href="" id="btn-agregar-category" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i></a>
                        </div>
                        <div class="addCategory">
                            {!! Form::open(['url'=>'admin/movies/'.$p->id.'/category/add']) !!}
                            {!! Form::select('category', $cats, 0, ['class' => 'custom-select form-control']) !!}
                            {!! Form::submit('Guardar Categoria', ['class'=>'btn btn-success']) !!}
                            {!! Form::close() !!}
                        </div>
                        <div class="etiquetas">
                            @foreach($p->categories as $c)
                                <i class="fa-solid fa-tag"> {{$cats[$c->category_id]}}</i>
                            @endforeach
                        </div>
                        
                    </div>

                    <div class="link card">
                        <div class="header">
                            Agregar Link<a href="" id="btn-agregar-link" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i></a>
                        </div>
                        <div class="addLink">
                            {!! Form::open(['url'=>'admin/movies/'.$p->id.'/link/add']) !!}
                            {!! Form::text('link', null, ['class'=>'form_control']) !!} <br>
                            {!! Form::submit('Guardar', ['class'=>'btn btn-success']) !!}
                            {!! Form::close() !!}
                        </div>
                        <ul>
                            @foreach($p->links as $l)
                                <li><i class="fa-solid fa-link"></i> {{$l->link}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @include('connect.alerts')
    
@stop