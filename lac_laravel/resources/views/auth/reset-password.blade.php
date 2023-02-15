@extends('layouts.app')

@section('content')
    <div class="grid">
        <form action="{{route('password.update')}}" method="POST">
            @csrf

            <label for="email">Your email address</label>
            <input id="email" name="email" type="email" autocomplete="email" value="{{old('email')}}" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="password">Your new password</label>
            <input id="password" name="password" type="password" autocomplete="new password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="password_confirmation">Password confirmation</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new password"
                   required>
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
