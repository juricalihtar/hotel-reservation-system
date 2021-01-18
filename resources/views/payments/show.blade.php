@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Payment detail</h3>
    <ul class="list-unstyled">
        <li>Payment method: {{ $payment->payment_method }}</li>
        <li>Reservation ID: {{$payment->reservation->id}}</li>
        <li>Guest first name: {{$payment->guest->first_name}}</li>
        <li>Guest last name: {{$payment->guest->last_name}}</li>
    </ul>
    <a href="{{ route ('payments.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

