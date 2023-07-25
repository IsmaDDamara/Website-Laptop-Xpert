@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="logo">
        <img src="{{ asset('/img/logo.png') }}" alt="">
    </div>
    <div class="text-center mt-4 name">LaptopXpert</div>
    <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-field d-flex align-items-center">
            <input type="text" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="form-field d-flex align-items-center">
            <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password">
        </div>
        <button type="submit" class="btn mt-3">Login</button>
    </form>
</div>
@endsection