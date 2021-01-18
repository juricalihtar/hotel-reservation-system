@extends('layouts.app')


@section('content')
    <div class="mt-5 text-center">
    <h1>{{ $user->name}}</h1>
    <img src="https://picsum.photos/seed/picsum/300/300" alt="profile image" class="d-block mx-auto rounded-circle">
    <h3 class="mt-3">User detail</h3>
    <ul class="list-unstyled">
        <li>Name: {{ $user->name }}</li>
        <li>E-mail: {{ $user->email }}</li>
        <li>Role: {{ $user->role->name}}</li>

    </ul>
    <a href="{{ route ('users.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

