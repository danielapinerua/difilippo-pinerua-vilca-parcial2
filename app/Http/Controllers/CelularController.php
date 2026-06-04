<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;
use App\Models\Marca;

class CelularController extends Controller
{
    
    public function index()
    {
        $celulares = Celular::with('marca')->get();

        return view('celulares.index', compact('celulares'));
    }

    
    public function create()
    {
        $marcas = Marca::all();

        return view('celulares.create', compact('marcas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'marca_id' => 'required|exists:marcas,id',
        'modelo' => 'required|string'
        ]);
        
        Celular::create($validated);

        return redirect()->route('celulares.index');
    }
    

    public function show(string $id)
    {
        $celular = Celular::with('marca')->findOrFail($id);
        
        return view('celulares.show', compact('celular'));
    }

    
    public function edit(string $id)
    {
         $celular = Celular::findOrFail($id);
         $marcas = Marca::all();

         return view('celulares.edit', compact('celular', 'marcas'));
    }
   
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'marca_id' => 'required|exists:marcas,id',
            'modelo' => 'required|string'
        ]);
        
        $celular = Celular::findOrFail($id);
        $celular->update($validated);
        
        return redirect()->route('celulares.index');
    }
    
   public function destroy(string $id)
   {
    $celular = Celular::findOrFail($id);
    $celular->delete();

    return redirect()->route('celulares.index');
    }
}
