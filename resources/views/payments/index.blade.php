@extends('layouts.app')


@section('content')
<a href="{{route('payments.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Payment method</th>
      <th scope="col">Reservation ID</th>
      <th scope="col">Guest first name</th>
      <th scope="col">Guest last name</th>
      <th scope="col">Price</th>

      
      <th>Actions</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($payments->items() as $payment)
    <tr>
        <td>{{$payment->id}}</td>
        <td>{{$payment->payment_method}}</td>
        <td>{{$payment->reservation->id}}</td>
        <td>{{$payment->guest->first_name}}</td>
        <td>{{$payment->guest->last_name}}</td>
        <td>{{$payment->reservation->room->room_type->base_price}}€</td>

        
        <td>
          <a class="btn btn-outline-primary" href="{{route('payments.show', ['payment' => $payment->id])}}">Details</a>
          <a class="btn btn-outline-primary" href="{{route('payments.edit', ['payment' => $payment->id])}}">Edit</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection