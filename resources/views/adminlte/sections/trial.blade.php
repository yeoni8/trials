@extends('adminlte\main')

@section('content')

    <h1>Name - {{$trial->name}}</h1>
    <p>
        Description:
    </p>
    <p>
        {{$trial->description}}
    </p>
@endsection
