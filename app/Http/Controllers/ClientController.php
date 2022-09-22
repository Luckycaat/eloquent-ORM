<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function index(): View
    {
        $clients = Client::get();

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

    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');
        Client::create($dados);
        return redirect('/clients');
    }

    public function edit(int $id): View
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', [
            'client' => $client,
        ]);
    }

    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao,
        ]);

        return redirect('/clients');
    }

    public function destroy(int $id): RedirectResponse
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect('/clients');
    }
}
