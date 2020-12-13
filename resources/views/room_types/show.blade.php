@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Room type detail</h3>
    <ul class="list-unstyled">
        <li>Room type name: {{ $room_type->room_type_name }}</li>
        <li>Base price: {{ $room_type->base_price }}</li>
    </ul>
    <a href="{{ route ('room_types.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

