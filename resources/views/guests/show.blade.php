@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Guest detail</h3>
    <ul class="list-unstyled">
        <li>First name: {{ $guest->first_name }}</li>
        <li>Last name: {{ $guest->last_name }}</li>
        <li></li>
    </ul>
    <a href="{{ route ('guests.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

