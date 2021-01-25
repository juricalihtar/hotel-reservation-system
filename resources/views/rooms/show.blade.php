@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Room detail</h3>
    <ul class="list-unstyled">
        <li>Number: {{ $room->number }}</li>
        <li>Room status: {{ $room->room_status->room_status_name}}</li>
        <li>Room type: {{ $room->room_type->room_type_name}}</li>
        <li>Price: {{ $room->room_type->base_price}}€</li>
    </ul>
    </div>

    <div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('rooms.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('rooms.edit', ['room' => $room]) }}">Edit</a>

<form class="form-inline" action="{{ route('rooms.destroy', ['room' => $room->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
 
  

