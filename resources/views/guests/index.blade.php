@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
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
        <td></td>
        <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
 
  

