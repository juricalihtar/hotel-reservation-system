@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Reservation date</th>
      <th scope="col">Check-in date</th>
      <th scope="col">Check-out date</th>
      <th scope="col">Adults</th>
      <th scope="col">Children</th>
      
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
    </tr>
    @endforeach
  </tbody>
</table>
@endsection