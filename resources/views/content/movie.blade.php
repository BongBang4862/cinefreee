<h2>Titulo</h2>
<p>{{$m->title}}</p>
<div class="tumb">
    <ul>
        @foreach($m->links as $l)
            <li>{{$l->link}}</li>
        @endforeach
    </ul>
 </div>