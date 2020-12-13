@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Room detail</h3>
    <ul class="list-unstyled">
        <li>Number: {{ $room->number }}</li>
        <li>Room status ID: {{ $room->room_status_id }}</li>
        <li>Room type ID: {{ $room->room_type_id }}</li>
    </ul>
    <a href="{{ route ('rooms.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

