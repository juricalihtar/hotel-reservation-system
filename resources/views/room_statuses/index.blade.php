@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Room status name</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($room_statuses->items() as $room_status)
    <tr>
        <td>{{$room_status->id}}</td>
        <td>{{$room_status->room_status_name}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection