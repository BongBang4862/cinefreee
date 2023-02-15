<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/455de5f3f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('/static/css/dashboard.css')}}">

    
    @section('css')
   
    {{-- para mostrar el contenido --}}
    @show

</head>
<body>
            <div class="menu-dashboard">

                <div class="top-menu">
                    <div class="logo">
                        <img src="/static/img/logo.jpg" alt="">
                        <span>Bienvenido</span>
                    </div>
                </div>
                <div class="menu">
                    <a href="{{url('/admin/dashboard')}}">
                        <div class="enlace">
                            <i class="fa-solid fa-gauge-high"></i>
                            <span>Dashboard</span>
                        </div>
                    </a>
                    <a href="{{url('/admin/movies')}}">
                        <div class="enlace">
                            <i class="fa-solid fa-film"></i>
                            <span>Peliculas</span>
                        </div>
                    </a> 
                    <a href="{{url('/admin/dashboard')}}">
                        <div class="enlace">
                            <i class="fa-solid fa-tv"></i>
                            <span>Series</span>
                        </div>
                    </a>
                    <a href="{{url('/admin/dashboard')}}">
                        <div class="enlace">
                            <i class="fa-solid fa-basket-shopping"></i>
                            <span>Pedidos</span>
                        </div>
                    </a>
                    <a href="{{url('/admin/dashboard')}}">
                        <div class="enlace">
                            <i class="fa-solid fa-gears"></i>
                            <span>Configuracion</span>
                        </div>
                    </a>
                </div>
            </div>
            @section('contenido')
   
                 {{-- para mostrar el contenido --}}
            @show
    
    
   
     

    {{-- <script src="{{url('/css/bootstrap.min.js')}}"></script> --}}
    <script src="{{url('static/js/api.js')}}"></script>
    <script src="{{url('static/js/modal.js')}}"></script>
</body>
</html>