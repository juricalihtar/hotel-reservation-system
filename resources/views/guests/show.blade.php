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
        <li>City: {{$guest->country}}</li>
    </ul>
    
    </div>

    <div class="btn-group" role="group">
<a class="btn btn-secondary" href="{{ route('guests.index') }}">Back</a>

<a class="btn btn-primary" href="{{ route('guests.edit', ['guest' => $guest]) }}">Edit</a>

<form class="form-inline" action="{{ route('guests.destroy', ['guest' => $guest->id]) }}" method="POST">
    <!-- CSRF token -->
    @csrf
    @method('DELETE')
    <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
 
  

