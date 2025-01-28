@extends('layouts.fo_layout')

@section('content')
    <h4>Dados do User {{$user->name}}</h4>
    <h6>Nome: {{ $user->name }}</h6>
    <h6>Morada:{{ $user->address }}</h6>
    <h6>Nif:{{ $user->nif }}</h6>
@endsection
