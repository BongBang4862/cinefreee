
@foreach ($json['results'] as $item)
    <li>{{$item['original_title']." Fecha de lanzamineto: ".$item['release_date']}}</li>
@endforeach