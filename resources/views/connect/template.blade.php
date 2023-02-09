<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{url('/static/css/connec.css')}}">
    <link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{url('/static/css/dashboard.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/455de5f3f1.js" crossorigin="anonymous"></script>
    
    @section('css')
   
    {{-- para mostrar el contenido --}}
    @show

</head>
<body>
   
    @section('contenido')
   
    {{-- para mostrar el contenido --}}
    @show 

    {{-- <script src="{{url('/css/bootstrap.min.js')}}"></script> --}}
    <script src="{{url('static/js/api.js')}}"></script>
</body>
</html>