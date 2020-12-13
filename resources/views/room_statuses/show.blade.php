@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Room status detail</h3>
    <ul class="list-unstyled">
        <li>Room status name: {{ $room_status->room_status_name }}</li>
    </ul>
    <a href="{{ route ('room_statuses.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

