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
        <link rel="stylesheet" href="{{url('/static/css/home.css')}}">
    </head>
    <body>
        <div class="grid-container">
            <div class="header">
                <div class="logo">
                    <img src="{{url('/static/img/logo.jpg')}}" alt="">
                </div>
                <div class="navegation">
                    <ul>
                        <li>Cartelera</li>
                        <li>Categoria</li>
                        <li>las ultimas </li>
                        <li>Pronto...</li>
                    </ul>
                </div>
            </div>
            <div class="carrousel">
                @include('templates.slider')
            </div>
            <div class="sidebar"></div>
            <div class="galery"></div>
            <div class="footer"></div>
        </div>
    </body>
</html>