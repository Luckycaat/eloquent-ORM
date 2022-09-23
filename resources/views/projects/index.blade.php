@extends('app')
@section('titulo', 'Lista de Projetos')
@section('conteudo')
    <h1>Lista de Projetos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td><a href="{{ route('projects.show', $project) }}">{{ $project->nome }}</a></td>
                    <td>{{ $project->client->nome }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Novo Cliente</a>
@endsection