<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(StoreClienteRequest $request)
    {
        $validated = $request->validated();

        Cliente::create($validated);

        return redirect()->route('clientes.index');
    }

    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.show', compact('cliente'));
    }

    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', compact('cliente'));
    }

    public function update(UpdateClienteRequest $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $validated = $request->validated();
        
        $cliente->update($validated);
        
        return redirect()->route('clientes.index');
    }

    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        
        return redirect()->route('clientes.index');
    }
}
