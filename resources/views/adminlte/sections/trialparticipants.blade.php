@foreach ($participants as $participant)

    <h1>{{$participant->first_name}}</h1>
    <p>{{$participant->pivot->participant_comment}}</p>

@endforeach