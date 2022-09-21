<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();

        return view('clients.index', [
            'clients' => $clients,
        ]);
    }

    public function show(int $id)
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
