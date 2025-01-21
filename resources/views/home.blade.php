@extends('layouts.fo_layout')
@section('content')
    <h5>Olá estou em casa.</h5>
    <h6>{{ $myVar }}</h6>
    <h6>{{ $contactInfo[0] }}</h6>
    
    <img src="{{ asset('images/what-is-software-CA-Capterra-Header.png') }}" alt="">
    <ul>
        <li><a href="{{ route('users.show') }}">Todos os users</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
    </ul>
@endsection
