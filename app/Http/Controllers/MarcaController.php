<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|unique:marcas'
        ]);

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

    public function update(Request $request, string $id)
    {
        $marca = Marca::findOrFail($id);
        $validated = $request->validate([
            'nombre' => 'required|string|unique:marcas,nombre,' . $id
        ]);
        
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
