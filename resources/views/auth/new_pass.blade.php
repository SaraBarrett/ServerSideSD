@extends('layouts.fo_layout')
@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" value="{{ request()->email }}" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <input type="hidden" name="token" value="{{ request()->token }}" id="">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
