@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('/img/logo.png') }}" alt="">
    </div>
    <div class="text-center mt-4 name">LaptopXpert</div>
    <form class="p-3 mt-3" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-field d-flex align-items-center">
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        <div class="form-field d-flex align-items-center">
            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email">
        </div>
        <div class="form-field d-flex align-items-center">
            <input type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password">
        </div>
        <div class="form-field d-flex align-items-center">
            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">
        </div>
        <button type="submit" class="btn mt-3">Register</button>
    </form>
</div>
@endsection
