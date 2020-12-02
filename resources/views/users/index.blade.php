@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Role ID</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($users->items() as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role_id}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

    

