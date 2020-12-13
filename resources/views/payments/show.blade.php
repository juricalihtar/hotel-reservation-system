@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Payment detail</h3>
    <ul class="list-unstyled">
        <li>Payment method: {{ $payment->payment_method }}</li>
        <li>Reservation ID: {{ $payment->reservation_id }}</li>
        <li>Guest ID: {{ $payment->guest_id }}</li>
    </ul>
    <a href="{{ route ('payments.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

