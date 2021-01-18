@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('reservations.store') }}" method="POST">
    
        @csrf


        <div class="form-group">
        <label for="reservation_date">Reservation date</label>
        <input value="{{ @old('reservation_date') }}" name="reservation_date" type="text" class="form-control" id="reservation_date">
        @if ($errors->has('reservation_date'))
            <span class="text-danger">{{ $errors->first('reservation_date') }}</span>
        @endif
        </div>

        <!-- check-in date -->
        <div class="form-group">
        <label for="check_in_date">Check-in date</label>
        <input value="{{ @old('check_in_date') }}" name="check_in_date" type="text" class="form-control" id="check_in_date">
        @if ($errors->has('check_in_date'))
            <span class="text-danger">{{ $errors->first('check_in_date') }}</span>
        @endif
        </div>

        <!-- check-out date -->
        <div class="form-group">
        <label for="check_out_date">Check-out date</label>
        <input value="{{ @old('check_out_date') }}" name="check_out_date" type="text" class="form-control" id="check_out_date">
        @if ($errors->has('check_out_date'))
            <span class="text-danger">{{ $errors->first('check_out_date') }}</span>
        @endif
        </div>

        <!-- adults -->
        <div class="form-group">
        <label for="adults">Adults</label>
        <input value="{{ @old('adults') }}" name="adults" type="text" class="form-control" id="adults">
        @if ($errors->has('adults'))
            <span class="text-danger">{{ $errors->first('adults') }}</span>
        @endif
        </div>

        <!-- children -->
        <div class="form-group">
        <label for="children">Children</label>
        <input value="{{ @old('children') }}" name="children" type="text" class="form-control" id="children">
        @if ($errors->has('children'))
            <span class="text-danger">{{ $errors->first('children') }}</span>
        @endif
        </div>

        <div class="form-group">
                <label for="room">Room</label>
                {{ Form::select('room_id', $rooms, 1, ['class' => 'form-control', 'id' => 'room']) }}
        </div>

        <div class="form-group">
                <label for="guest">Guest</label>
                {{ Form::select('guest_id', $guests, 1, ['class' => 'form-control', 'id' => 'guest']) }}
        </div>

        <div class="form-group">
                <label for="user">Employee</label>
                {{ Form::select('user_id', $users, 1, ['class' => 'form-control', 'id' => 'user']) }}
        </div>

        

        

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-link">Cancel</a>

    </form>
</div>
@endsection