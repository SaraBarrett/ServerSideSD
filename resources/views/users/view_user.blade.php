@extends('layouts.fo_layout')

@section('content')
    <form action="{{ route('users.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input disabled name="email" value="{{ $user->email }}" type="email" class="form-control"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>


        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input name="name" value="{{ $user->name }}" type="text" class="form-control"
                id="exampleInputPassword1">
            @error('name')
                erro name
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Morada</label>
            <input name="address" value="{{ $user->address }}" type="text" class="form-control"
                id="exampleInputPassword1">
            @error('address')
                erro Morada
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nif</label>
            <input name="nif" value="{{ $user->nif }}" type="text" class="form-control"
                id="exampleInputPassword1">
            @error('nif')
                erro nif
            @enderror
        </div>
        <div class="mb-5">
            <input type="file" name="photo" accept="image/">
        </div>
        @error('photo')
            erro photo
        @enderror
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
