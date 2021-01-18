@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('rooms.store') }}" method="POST">
    
        @csrf

        <!-- number -->
        <div class="form-group">
        <label for="number">Number</label>
        <input value="{{ @old('number') }}" name="number" type="text" class="form-control" id="number">
        @if ($errors->has('number'))
            <span class="text-danger">{{ $errors->first('number') }}</span>
        @endif
        </div>


        <div class="form-group">
                <label for="room_type">Room type</label>
                {{ Form::select('room_type_id', $room_types, 1, ['class' => 'form-control', 'id' => 'room_type']) }}
        </div>

        <div class="form-group">
                <label for="room_status">Room status</label>
                {{ Form::select('room_status_id', $room_statuses, 1, ['class' => 'form-control', 'id' => 'room_status']) }}
        </div>

        

        

        

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-link">Cancel</a>

    </form>
</div>
@endsection