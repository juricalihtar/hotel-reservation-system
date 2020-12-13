@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Role detail</h3>
    <ul class="list-unstyled">
        <li>Name: {{ $role->name }}</li>
    </ul>
    <a href="{{ route ('roles.index')}}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
 
  

