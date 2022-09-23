@extends('app')
@section('titulo', 'Detalhes do Clientes')
@section('conteudo')
    <div class="card">
        <div class="card-header">
            Detalhes do Projeto {{ $project->nome }}
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{ $project->id }}</p>
            <p><strong>Nome: </strong>{{ $project->nome }}</p>
            <p><strong>Cliente: </strong>{{ $project->client->nome }}</p>
            <br>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Funcionários do Projeto
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-success" href="{{ route('projects.index') }}">Voltar para Lista</a>
        </div>
    </div>
@endsection
