@extends('connect.template')
@section('title','Pagina de Login')

<div class="inside">
    {!! Form::open(['url'=>'/admin/categories']) !!}
    <label for="name">Nombre</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">
                <i class="far fa-keyboard"></i>
            </span>
        </div>
        {!! Form::text('category', null, ['class'=>'form-control']) !!}
    </div>


    <label for="icon" class="mtop16">Icono</label>
    <div class="input-group""> 
        {!! Form::text('icono', null, ['class'=>'form_control']) !!}
        <label class="form-file-input" for="customFile">
        </label>
    </div>

    {!! Form::submit('Guardar', ['class'=>'mtop16 btn btn-success']) !!}
    {!! Form::close() !!}
</div>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <td width="64px">Icono</td>
            <td>Nombre</td>
            <td width="150px">Options</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($cats as $cat)
            <tr>
                <td>{{$cat->icono}}</td>
                <td>{{$cat->category}}</td>
                <td>
                 <div class="options">
                     <a data-toggle="tooltip" data-placement="top" title="Editar" href="{{url('/admin/categories/'.$cat->id.'/edit')}}">
                         <i class="fas fa-edit"></i>
                     </a>
                     <a data-toggle="tooltip" data-placement="top" title="Eliminar" href="{{url('/admin/categories/'.$cat->id.'/delete')}}">
                         <i class="fas fa-trash-alt"></i>
                     </a>
                 </div>
                </td>
            </tr>
        @endforeach
    </tbody>
 </table>