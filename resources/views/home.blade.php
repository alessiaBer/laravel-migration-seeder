@extends('layouts.app')

@section('content')
<div class="container bg-light bg-opacity-75 pt-4 pb-5 px-4">
    <h2 class="pb-3">Departures</h2>
    <table class="table py-3">
        <thead>
            <tr>
                <th scope="col">Train Code</th>
                <th scope="col">Time</th>
                <th scope="col">Company</th>
                <th scope="col">Arrival Station</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <th scope="row">{{$train->train_code}}</th>
                <td>{{date('H:i', strtotime($train->departure_time))}}</td>
                <td>{{$train->company}}</td>
                <td>{{$train->arrival_station}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection