@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('guests.store') }}" method="POST">
    
        @csrf

        <!-- first name -->
        <div class="form-group">
        <label for="first_name">First name</label>
        <input value="{{ @old('first_name') }}" name="first_name" type="text" class="form-control" id="first_name">
        @if ($errors->has('first_name'))
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
        @endif
        </div>

        <!-- last name -->
        <div class="form-group">
        <label for="last_name">Last name</label>
        <input value="{{ @old('last_name') }}" name="last_name" type="text" class="form-control" id="last_name">
        @if ($errors->has('last_name'))
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
        @endif
        </div>

        <!-- email -->
        <div class="form-group">
        <label for="email">Email</label>
        <input value="{{ @old('email') }}" name="email" type="text" class="form-control" id="email">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        </div>

        <!-- phone number -->
        <div class="form-group">
        <label for="phone_number">Phone number</label>
        <input value="{{ @old('phone_number') }}" name="phone_number" type="text" class="form-control" id="phone_number">
        @if ($errors->has('phone_number'))
            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
        @endif
        </div>

        <!-- address -->
        <div class="form-group">
        <label for="address">Address</label>
        <input value="{{ @old('address') }}" name="address" type="text" class="form-control" id="address">
        @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
        </div>

        <!-- city -->
        <div class="form-group">
        <label for="city">City</label>
        <input value="{{ @old('city') }}" name="city" type="text" class="form-control" id="city">
        @if ($errors->has('city'))
            <span class="text-danger">{{ $errors->first('city') }}</span>
        @endif
        </div>

        <!-- country -->
        <div class="form-group">
        <label for="country">Country</label>
        <input value="{{ @old('country') }}" name="country" type="text" class="form-control" id="country">
        @if ($errors->has('country'))
            <span class="text-danger">{{ $errors->first('country') }}</span>
        @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('guests.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection