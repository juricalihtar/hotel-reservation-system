@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Payment detail</h3>
    <ul class="list-unstyled">
        <li>Payment method: {{ $payment->payment_method }}</li>
        <li>Reservation ID: {{$payment->reservation->id}}</li>
        <li>Guest first name: {{$payment->guest->first_name}}</li>
        <li>Guest last name: {{$payment->guest->last_name}}</li>
        <li>Price: {{$payment->reservation->room->room_type->base_price}}€</li>
    </ul>
    
    </div>
    <div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('payments.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('payments.edit', ['payment' => $payment]) }}">Edit</a>

<form class="form-inline" action="{{ route('payments.destroy', ['payment' => $payment->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
 
  

