@extends('layouts.app')

@section('content')
    <div class="grid">
        <form action="{{route('login')}}" method="POST">
            @csrf
            @error('status')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $status }}</strong>
                                    </span>
            @enderror
            <label for="email">e-mail address:</label>
            <input id="email" name="email" type="email" autocomplete="email" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <label for="password">password:</label>
            <input id="password" name="password" type="password" autocomplete="new password" required>
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            @if(Route::has('password.request'))
                <a href="{{route('password.request')}}">Forgot your password?</a>
            @endif
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
