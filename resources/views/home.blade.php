@extends('layouts.fo_layout')
@section('content')
    <h5>Olá estou na rua.</h5>
    <h6>{{ $myVar }}</h6>
    <h6>{{ $contactInfo['nome'] }}</h6>

    <img src="{{ asset('images/what-is-software-CA-Capterra-Header.png') }}" alt="">
    <ul>
        <li><a href="{{ route('users.show') }}">Todos os users</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a  href="{{route('tasks.all')}}">Todas as Tarefas</a></li>
    </ul>
@endsection
