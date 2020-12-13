@extends('layouts.app')


@section('content')
<a href="{{route('rooms.create')}}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Number</th>
      <th>Actions</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($rooms->items() as $room)
    <tr>
        <td>{{$room->id}}</td>
        <td>{{$room->number}}</td>
        <td>
          <a class="btn btn-outline-primary" href="{{route('rooms.show', ['room' => $room->id])}}">Details</a>
          <a class="btn btn-outline-primary" href="{{route('rooms.edit', ['room' => $room->id])}}">Edit</a>
        </td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection