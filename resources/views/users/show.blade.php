@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">User detail</h3>
    <ul class="list-unstyled">
        <li>Name: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
        <li>Password: {{ $user->password }}</li>
        <li>Role ID: {{ $user->role_id}}</li>

    </ul>
    <a href="{{ route ('users.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

