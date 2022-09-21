@extends('app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <h1>Novo Cliente</h1>
    <form action="">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="email" class="form-control" id="name" placeholder="">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="email" class="form-control" id="endereco" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>

@endsection
