@foreach ($trials as $trial)

    <h1>{{$trial->name}}</h1>
    <p>{{$trial->pivot->participant_comment}}</p>

@endforeach