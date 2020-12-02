@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Number</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($rooms->items() as $room)
    <tr>
        <td>{{$room->id}}</td>
        <td>{{$room->number}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection