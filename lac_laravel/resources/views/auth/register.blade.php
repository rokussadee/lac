@extends('layouts.app')

@section('content')
    <div class="grid">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <label for="name">Full Name:</label>
            <input id="name" name="name" type="text" autocomplete="name" required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="email">Your e-mail:</label>
            <input id="email" name="email" type="email" autocomplete="email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="password">Password:</label>
            <input id="password" name="password" type="password" autocomplete="new password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="password_confirmation">Confirm password:</label>
            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new password"
                   required>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
