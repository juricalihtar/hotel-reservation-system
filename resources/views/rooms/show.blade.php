@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Room detail</h3>
    <ul class="list-unstyled">
        <li>Number: {{ $room->number }}</li>
        <li>Room status: {{ $room->room_status->room_status_name}}</li>
        <li>Room type: {{ $room->room_type->room_type_name}}</li>
    </ul>
    <a href="{{ route ('rooms.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

