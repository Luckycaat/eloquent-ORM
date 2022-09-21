@extends('app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="email" class="form-control" id="name" id="name" placeholder="Digite o nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="email" class="form-control" id="endereco" placeholder="Digite o endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" rows="3" placeholder="Digite a observação"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>
    </form>

@endsection
