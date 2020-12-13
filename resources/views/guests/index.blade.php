@extends('layouts.app')


@section('content')
<a href="{{route('guests.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($guests->items() as $guest)
    <tr>
        <td>{{$guest->id}}</td>
        <td>{{$guest->first_name}}</td>
        <td>{{$guest->last_name}}</td>
        <td>{{$guest->email}}</td>
        <td>{{$guest->phone_number}}</td>
        <td>{{$guest->address}}</td>
        <td>{{$guest->city}}</td>
        <td>{{$guest->country}}</td>
        <td>
          <a class="btn btn-outline-primary" href="{{route('guests.show', ['guest' => $guest->id])}}">Details</a>
          <a class="btn btn-outline-primary" href="{{route('guests.edit', ['guest' => $guest->id])}}">Edit</a>
        </td>
        <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
 
  

