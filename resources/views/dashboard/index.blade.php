{{-- <h1>estoy en el dashboard</h1>
<a href="/admin/movies">Ver todas las peliculas</a>
<a href="/admin/movies/add">Ingresar Pelicula</a>
<a href="/admin/categories">Ingresar Categoria</a>
<a href="/logout">Cerrar sesion</a> --}}
@extends('connect.template')
@section('title','Dashboard')

@section('contenido')
    <div class="menu-dashboard">

        <div class="top-menu">
            <div class="logo">
                <img src="/static/img/logo.jpg" alt="">
                <span>Entretenimiento</span>
            </div>
            <div class="toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="input-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>

        <div class="menu">
            <div class="enlace">
                <i class="fi fi-rr-home"></i>
                <span>Dashboard</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-users"></i>
                <span>Peliculas</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-chart-mixed"></i>
                <span>Series</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-messages"></i>
                <span>Pedidos</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-gears"></i>
                <span>Configuracion</span>
            </div>
        </div>

    </div>
@stop

