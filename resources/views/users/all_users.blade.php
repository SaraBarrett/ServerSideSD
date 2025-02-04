@extends('layouts.fo_layout')
@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <h1>Aqui vês todos os utilizadores</h1>

    <h6>O contacto é {{ $contactPerson->name }} e o contacto é {{ $contactPerson->email }} </h6>
    <ul>
        <li>{{ $cesaeInfo['name'] }}</li>
    </ul>
    <h6>Contactos</h6>
    <ul>
        @foreach ($allContacts as $item)
            <li>{{ $item['id'] }} - {{ $item['name'] }}- {{ $item['phone'] }}</li>
        @endforeach
    </ul>
    <form action="">
        <input type="text" id="" name="search" value="{{ request()->query('search') }}">
        <button type="submit" class="btn btn-secondary">Procurar</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allUsers as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td> <a class="btn btn-info" href="{{ route('users.view', $user->id) }}">Ver / Editar</a>

                        <a class="btn btn-danger" href="{{ route('users.delete', $user->id) }}">Apagar</a>
                    </td>

                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
