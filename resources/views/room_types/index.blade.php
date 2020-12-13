@extends('layouts.app')


@section('content')
<a href="{{route('room_types.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room type name</th>
      <th scope="col">Base price</th>
      <th>Actions</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($room_types->items() as $room_type)
    <tr>
        <td>{{$room_type->id}}</td>
        <td>{{$room_type->room_type_name}}</td>
        <td>{{$room_type->base_price}}</td>
        <td>
          <a class="btn btn-outline-primary" href="{{route('room_types.show', ['room_type' => $room_type->id])}}">Details</a>
          <a class="btn btn-outline-primary" href="{{route('room_types.edit', ['room_type' => $room_type->id])}}">Edit</a>
        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection