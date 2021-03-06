@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('payments.update', ['payment' => $payment->id]) }}" method="POST">
    
        @csrf
        @method('PUT')

       

        <!-- payment_method -->
        <div class="form-group">
            <label for="payment_method">Payment method</label>
            
            <select value="{{ $payment->payment_method }}" name="payment_method" type="text" class="form-control" id="payment_method">
                <option>Cash</option>
                <option>Credit card</option> 
            </select>
            @if ($errors->has('payment_method'))
            <span class="text-danger">{{ $errors->first('payment_method') }}</span>
            @endif

        <div class="form-group mt-3">
        <label for="reservation">Reservation ID</label>
        {{ Form::select('reservation_id', $reservations, $payment->reservation_id, ['class' => 'form-control', 'id' => 'reservation'])}}
        </div>

        <div class="form-group">
        <label for="guest">Guest</label>
        {{ Form::select('guest_id', $guests, $payment->guest_id, ['class' => 'form-control', 'id' => 'guest'])}}
        </div>

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('payments.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection