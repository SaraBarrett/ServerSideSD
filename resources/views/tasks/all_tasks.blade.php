@extends('layouts.fo_layout')
@section('content')
    <h6>Aqui tens todas as Tarefas</h6>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Pessoa Responsável</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->username }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
