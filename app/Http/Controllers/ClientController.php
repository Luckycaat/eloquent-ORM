<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::paginate(15);

        return view('clients.index', [
            'clients' => $clients,
        ]);
    }

    public function show(int $id): View
    {
        $client = Client::findOrFail($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    public function create(): View
    {
        return view('clients.create');
    }

    public function store(ClientRequest $request): RedirectResponse
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect()->route('clients.index')->with('mensagem', 'Cadastrado com Sucesso!');
    }

    public function edit(int $id): View
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

    public function update(int $id, ClientRequest $request): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao,
        ]);

        return redirect()->route('clients.index')->with('mensagem', 'Atualizado com Sucesso!');
    }

    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();

        return redirect('/clients');
    }
}
