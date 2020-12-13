@extends('layouts.app')


@section('content')
<a href="{{route('room_statuses.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room status name</th>
      <th>Actions</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($room_statuses->items() as $room_status)
    <tr>
        <td>{{$room_status->id}}</td>
        <td>{{$room_status->room_status_name}}</td>
        <td>
        <a class="btn btn-outline-primary" href="{{route('room_statuses.show', ['room_status' => $room_status->id])}}">Details</a>
        <a class="btn btn-outline-primary" href="{{route('room_statuses.edit', ['room_status' => $room_status->id])}}">Edit</a>
        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection