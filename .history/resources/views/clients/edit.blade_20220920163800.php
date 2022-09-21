@extends('app')
@section('titulo', 'Editar Cliente')
@section('conteudo')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $client->nome }}"
                placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $client->endereco }}"
                placeholder="Digite o endereço" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a observação">{{ $client->observacao }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

@endsection
