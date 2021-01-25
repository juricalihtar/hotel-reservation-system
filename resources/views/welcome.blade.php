@extends('layouts.app')

@php
$currentUserId = \Auth::user()->id;
@endphp

@section('content')
<div class="jumbotron mt-5">
  <h1 class="display-4">HOTEL RESERVATION SYSTEM</h1>
  <p class="lead">The best application for hotel reservations!</p>
  <hr class="my-4">


  <!-- prikaži gumb samo ako si prijavljen -->
  <a class="btn btn-primary btn-lg" href="{{ route('users.show', ['user' => $currentUserId]) }}" role="button">Go to my profile</a>
</div>
@endsection