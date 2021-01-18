@extends('layouts.app')


@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('users.store') }}" method="POST">
    
        @csrf

        <!-- user name -->
        <div class="form-group">
        <label for="name">Name</label>
        <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
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

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password">
                @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
        </div>

        <!-- password confirm polje -->
        <div class="form-group">
            <label for="password-confirmation">Repeat your password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
                @if ($errors->has('password_confirmation'))
                     <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                 @endif
        </div>

        <div class="form-group">
                    <label for="role">Role</label>
                    {{ Form::select('role_id', $roles, 1, ['class' => 'form-control', 'id' => 'role']) }}
                </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('guests.index') }}" class="btn btn-link">Cancel</a>

    </form>
</div>
@endsection