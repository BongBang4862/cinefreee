<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/static/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}"> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/455de5f3f1.js" crossorigin="anonymous"></script>
    
    @section('css')
   
    {{-- para mostrar el contenido --}}
    @show

</head>
<body>
    <div class="menu-dashboard">

        <div class="top-menu">
            <div class="logo">
                <img src="/static/img/logo.jpg" alt="">
                <span>Entretenimiento</span>
            </div>
            <div class="toggle">
                <i class="fa-solid fa-toggle-on"></i>
            </div>
        </div>

        <div class="input-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>

        <div class="menu">
            <div class="enlace">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </div>
            <div class="enlace">
               <a href="{{url('/admin/movies')}}">
                    <i class="fa-solid fa-film"></i>
                    <span>Peliculas</span>
                </a> 
            </div>
            <div class="enlace">
                <i class="fa-solid fa-tv"></i>
                <span>Series</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-basket-shopping"></i>
                <span>Pedidos</span>
            </div>
            <div class="enlace">
                <i class="fa-solid fa-gears"></i>
                <span>Configuracion</span>
            </div>
        </div>

    </div>
   
    @section('contenido')
   
    {{-- para mostrar el contenido --}}
    @show 

    {{-- <script src="{{url('/css/bootstrap.min.js')}}"></script> --}}
    <script src="{{url('static/js/api.js')}}"></script>
</body>
</html>