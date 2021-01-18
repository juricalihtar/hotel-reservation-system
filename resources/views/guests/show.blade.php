@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Guest detail</h3>
    <ul class="list-unstyled">
        <li>First name: {{ $guest->first_name }}</li>
        <li>Last name: {{ $guest->last_name }}</li>
        <li>Email: {{$guest->email}}</li>
        <li>Phone number: {{$guest->phone_number}}</li>
        <li>Address: {{$guest->address}}</li>
        <li>City: {{$guest->city}}</li>
        <li>Country: {{$guest->country}}</li>
    </ul>
    <a href="{{ route ('guests.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

