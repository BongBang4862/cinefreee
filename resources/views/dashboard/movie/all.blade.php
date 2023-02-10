@extends('connect.template')
@section('title','Añadir Pelicula')


    @section('contenido')
    <a  data-toggle="tooltip" data-placement="top" title="Editar" href="{{url('/admin/movies/add')}}">
        <i class="fas fa-edit">Añadir Pelicula</i>
    </a>
    <table class="table table-striped">
        <thead>
            
                <td width='60'>ID</td>
                <td width='50'></td>
                <td>Title</td>
                <td>Year</td>
                <td>Sinopsis</td>
                <td>Calificacion</td>
                <td>Triler</td>
                <td></td>
        </thead>
        <tbody>
            @foreach ($movies as $p)
                <tr>
                    <td>{{ $p->id}}</td>
                    <td>
                        <a data-fancybox="galery" href="{{url('/uploads/'.$p->file_path.'/'.$p->poster)}}">
                            <img src="{{url('/uploads/'.$p->file_path.'/t_'.$p->poster)}}" width="50" alt="">
                        </a>
                    </td>
                    <td>{{ $p->title}}</td>
                    <td>{{ $p->Year}}</td>
                    <td>{{ $p->Sinopsis}}</td>
                    <td>{{ $p->Calificacion}}</td>
                    <td>{{ $p->Triler}}</td>
                    <td>
                        <div class="options">
                            <a  data-toggle="tooltip" data-placement="top" title="Ver" href="{{url('/admin/movies/'.$p->id)}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a  data-toggle="tooltip" data-placement="top" title="Editar" href="{{url('/admin/products/'.$p->id.'/edit')}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a data-toggle="tooltip" data-object="{{ $p->id}}" data-path="admin/products" data-action='restore' class="btn_delete" data-placement="top" title="Eliminar" href="">
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

    @include('connect.alerts')
    
@stop