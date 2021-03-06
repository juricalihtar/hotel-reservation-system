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
        <li>Room number: {{$reservation->room->number}}</li>
        <li>Guest: {{$reservation->guest->first_name}} {{$reservation->guest->last_name}}</li>
        <li>Employee: {{$reservation->user->name}}</li>
    </ul>
    </div>

    <div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('reservations.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('reservations.edit', ['reservation' => $reservation]) }}">Edit</a>

<form class="form-inline" action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
 



