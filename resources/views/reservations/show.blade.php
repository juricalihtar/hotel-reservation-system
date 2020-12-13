@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Reservation detail</h3>
    <ul class="list-unstyled">
        <li>Reservation date: {{ $reservation->resrevation_date }}</li>
        <li>Check-in dat: {{ $reservation->check_in_date }}</li>
        <li>Check-out date: {{ $reservation->check_out_date }}</li>
        <li>Adults: {{ $reservation->adults }}</li>
        <li>Children: {{ $reservation->children }}</li>
        <li>User ID: {{ $reservation->user_id }}</li>
        <li>Guest ID: {{ $reservation->guest_id }}</li>
        <li>Room ID: {{ $reservation->room_id }}</li>
    </ul>
    <a href="{{ route ('reservations.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 


