<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaRequest;
use App\Http\Requests\UpdateMarcaRequest;
use App\Models\Marca;

class MarcaController extends Controller
{

    public function index()
    {
        $marcas = Marca::all();
        
        return view('marcas.index', compact('marcas'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(StoreMarcaRequest $request)
    {
        $validated = $request->validated();

        Marca::create($validated);

        return redirect()->route('marcas.index');
    }

    public function show(string $id)
    {
        $marca = Marca::findOrFail($id);

        return view('marcas.show', compact('marca'));
    }

    public function edit(string $id)
    {
        $marca = Marca::findOrFail($id);

        return view('marcas.edit', compact('marca'));
    }

    public function update(UpdateMarcaRequest $request, string $id)
    {
        $marca = Marca::findOrFail($id);
        $validated = $request->validated();
        
        $marca->update($validated);
        
        return redirect()->route('marcas.index');
    }
    
    public function destroy(string $id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();
        
        return redirect()->route('marcas.index');
    }
}
