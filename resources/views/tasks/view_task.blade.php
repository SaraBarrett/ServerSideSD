@extends('layouts.fo_layout')

@section('content')
    <h4>Dados do Tarefa {{ $task->name }}</h4>
    <h6>Descrição: {{ $task->description }}</h6>
    <h6>Responsável:{{ $task->username }}</h6>
@endsection
