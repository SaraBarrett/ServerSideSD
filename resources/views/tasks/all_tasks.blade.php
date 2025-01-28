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
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->username }}</td>

                    <td> <a class="btn btn-info" href="{{ route('tasks.view', $task->id) }}">Ver</a>

                        <a class="btn btn-danger" href="{{ route('tasks.delete', $task->id) }}">Apagar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
