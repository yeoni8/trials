@foreach ($itenz as $i)

    <h1>{{$i->first_name}}</h1>
    <p>{{$i->created_at}}</p>

@endforeach