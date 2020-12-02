@extends('layouts.app')


@section('content')
<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Payment method</th>
      
      
    </tr>
  </thead>
  <tbody>
    @foreach ($payments->items() as $payment)
    <tr>
        <td>{{$payment->id}}</td>
        <td>{{$payment->payment_method}}</td>
        
    </tr>
    @endforeach
  </tbody>
</table>
@endsection