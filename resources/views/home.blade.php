@extends('layouts.fo_layout')
@section('content')
    @auth
        <h5>Olá {{ Auth::user()->name }}</h5>
    @endauth

    <h6>{{ $myVar }}</h6>
    <h6>{{ $contactInfo['nome'] }}</h6>

    <img src="{{ asset('images/what-is-software-CA-Capterra-Header.png') }}" alt="">
    <ul>
        <li><a href="{{ route('users.show') }}">Todos os users</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a href="{{ route('tasks.all') }}">Todas as Tarefas</a></li>
    </ul>
@endsection
