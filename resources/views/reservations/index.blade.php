@extends('layouts.app')


@section('content')
<a href="{{route('reservations.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Reservation date</th>
      <th scope="col">Check-in date</th>
      <th scope="col">Check-out date</th>
      <th scope="col">Adults</th>
      <th scope="col">Children</th>
      <th scope="col">Room number</th>
      <th scope="col">Guest</th>
      <th scope="col">Employee</th>

      <th>Actions</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($reservations->items() as $reservation)
    <tr>
        <td>{{$reservation->id}}</td>
        <td>{{$reservation->reservation_date}}</td>
        <td>{{$reservation->check_in_date}}</td>
        <td>{{$reservation->check_out_date}}</td>
        <td>{{$reservation->adults}}</td>
        <td>{{$reservation->children}}</td>
        <td>{{$reservation->room->number}}</td>
        <td>{{$reservation->guest->first_name}} {{$reservation->guest->last_name}}</td>
        <td>{{$reservation->user->name}}</td>
        <td>
          <a class="btn btn-outline-primary" href="{{route('reservations.show', ['reservation' => $reservation->id])}}">Details</a>
          <a class="btn btn-outline-primary" href="{{route('reservations.edit', ['reservation' => $reservation->id])}}">Edit</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection