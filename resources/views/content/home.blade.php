
{{-- @foreach ($movies as $m)
    <h1>{{$m->title}}</h1>
    <img src="{{url('/uploads/'.$m->file_path.'/'.$m->poster)}}" >
    <a href="/movie/{{$m->id}}"</a>Ver Pelicula</a>
@endforeach --}}
@extends('connect.template')
@section('title','Cartelera')

@section('content')
<div class="row">
    <header class="header">Header</header>
    <nav class="navbar">Navbar</nav>
    <aside class="sidebar">Sidebar</aside>
    <article class="main">Main</header>
    <footer class="footer">footer</footer>
</div>
    
@show

