@extends('layouts.app')

@section('content')
<div class="container bg-light bg-opacity-75 pt-4 pb-5 px-4">
    <h2 class="pb-3">Departures</h2>
    <table class="table py-3">
        <thead>
            <tr>
                <th scope="col">Train Code</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                @if($train->cancelled === 0) 
                <th scope="row">{{$train->train_code}}</th>
                <td>{{date('H:i', strtotime($train->departure_time))}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>{{date('H:i', strtotime($train->arrival_time))}}</td>
                <td>{{$train->company}}</td>
                @else 
                <th class="bg-danger" scope="row">{{$train->train_code}}</th>
                <td class="bg-danger dep_fail">{{date('H:i', strtotime($train->departure_time))}}<span class="d-inline-block ps-3">CANCELLED</span></td>
                <td class="bg-danger">{{$train->arrival_station}}</td>
                <td class="bg-danger">{{date('H:i', strtotime($train->arrival_time))}}</td>
                <td class="bg-danger">{{$train->company}}</td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection