@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room type name</th>
      <th scope="col">Base price</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($room_types->items() as $room_type)
    <tr>
        <td>{{$room_type->id}}</td>
        <td>{{$room_type->room_type_name}}</td>
        <td>{{$room_type->base_price}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection