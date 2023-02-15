@extends('layouts.app')

@section('content')
    <div class="grid">
        @if (session('status'))
            <div class="success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{route('password.email')}}" method="POST">
            @csrf

            <label for="email"></label>
            <input id="email" name="email" type="email" autocomplete="email" value="{{old('email')}}" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <button type="submit">Send password reset link</button>
        </form>
    </div>
@endsection
