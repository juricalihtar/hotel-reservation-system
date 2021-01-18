@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('rooms.update', ['room' => $room->id]) }}" method="POST">
    
        @csrf
        @method('PUT')

       

        <!-- number -->
        <div class="form-group">
        <label for="number">Number</label>
        <input value="{{ $room->number }}" name="number" type="text" class="form-control" id="number">
        @if ($errors->has('number'))
            <span class="text-danger">{{ $errors->first('number') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="room_type">Room type</label>
        {{ Form::select('room_type_id', $room_types, $room->room_type_id, ['class' => 'form-control', 'id' => 'room_type'])}}
        </div>

        <div class="form-group">
        <label for="room_status">Room status</label>
        {{ Form::select('room_status_id', $room_statuses, $room->room_status_id, ['class' => 'form-control', 'id' => 'room_status'])}}
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection