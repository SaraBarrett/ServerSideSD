@extends('layouts.fo_layout')
@section('content')
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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($allUsers as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
