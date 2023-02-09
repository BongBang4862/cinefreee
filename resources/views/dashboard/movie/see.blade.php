<h2>Title</h2>
<p>{{$p->title}}</p>
{!! Form::open(['url'=>'admin/movies/'.$p->id.'/link/add']) !!}
{!! Form::text('link', null, ['class'=>'form_control']) !!}
{!! Form::submit('Guardar', ['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

{!! Form::open(['url'=>'admin/movies/'.$p->id.'/category/add']) !!}
{!! Form::select('category', $cats, 0, ['class' => 'custom-select form-control']) !!}
{!! Form::submit('Guardar Categoria', ['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

<div class="tumb">
    <ul>
        @foreach($p->links as $l)
            <li>{{$l->link}}</li>
        @endforeach
    </ul>
 </div>

 <div class="tumb">
    <ul>
        @foreach($p->categories as $c)
            <li>{{$cats[$c->category_id]}}</li>
        @endforeach
    </ul>
 </div>

