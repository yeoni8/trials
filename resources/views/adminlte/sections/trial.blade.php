@extends('adminlte\main')

@section('content')

    <h1>Name - {{$trial->name}}</h1>
    <p>
        Description:
    </p>
    <p>
        {{$trial->description}}
    </p>


    <canvas id="myChart" width="400" height="400"></canvas>

    {{--<ul>--}}
        {{--@foreach($participations as $participation)--}}

            {{--<li>Participant ID - {{$participation->participant_id}}</li>--}}

        {{--@endforeach--}}
    {{--</ul>--}}
@endsection



@section('specific_scripts')
    <script src="{{ asset('adminlte/plugins/chartjs/Chart.min.js') }}"></script>
    <script>
        var data = {!!$chartData!!};  //this is ok it's blade

        var ctx = $("#myChart").get(0).getContext("2d");
        var myNewChart = new Chart(ctx).Bar(data);
    </script>
@endsection