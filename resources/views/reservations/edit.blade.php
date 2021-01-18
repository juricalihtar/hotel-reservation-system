@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('reservations.update', ['reservation' => $reservation->id]) }}" method="POST">
    
        @csrf
        @method('PUT')

       

        <!-- check-in date -->
        <div class="form-group">
        <label for="check_in_date">Check-in date</label>
        <input value="{{ $reservation->check_in_date }}" name="check_in_date" type="text" class="form-control" id="check_in_date">
        @if ($errors->has('check_in_date'))
            <span class="text-danger">{{ $errors->first('check_in_date') }}</span>
        @endif
        </div>

        <!-- check-out date -->
        <div class="form-group">
        <label for="check_out_date">Check-out date</label>
        <input value="{{ $reservation->check_out_date}}" name="check_out_date" type="text" class="form-control" id="check_out_date">
        @if ($errors->has('check_out_date'))
            <span class="text-danger">{{ $errors->first('check_out_date') }}</span>
        @endif
        </div>

        <!-- Adults -->
        <div class="form-group">
        <label for="adults">Adults</label>
        <input value="{{ $reservation->adults }}" name="adults" type="text" class="form-control" id="adults">
        @if ($errors->has('adults'))
            <span class="text-danger">{{ $errors->first('adults') }}</span>
        @endif
        </div>

        <!-- Children -->
        <div class="form-group">
        <label for="children">Children</label>
        <input value="{{ $reservation->children }}" name="children" type="text" class="form-control" id="children">
        @if ($errors->has('children'))
            <span class="text-danger">{{ $errors->first('children') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="room">Room</label>
        {{ Form::select('room_id', $rooms, $reservation->room_id, ['class' => 'form-control', 'id' => 'room'])}}
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection