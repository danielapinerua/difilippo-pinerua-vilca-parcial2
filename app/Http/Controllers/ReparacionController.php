<?php

namespace App\Http\Controllers;

use App\Models\Celular;
use App\Models\Cliente;
use App\Models\Reparacion;
use App\Models\Usuario;
use App\Http\Requests\ReparacionRequest;

class ReparacionController extends Controller
{
    public function index()
    {
        $reparaciones = Reparacion::with(['celular.marca', 'cliente', 'usuario'])->get();

        return view('reparaciones.index', compact('reparaciones'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $usuarios = Usuario::all();
        $celulares = Celular::with('marca')->get();
        
        return view('reparaciones.create', compact('clientes', 'usuarios', 'celulares'));
    }

    public function store(ReparacionRequest $request)
    {
        $validated = $request->validated();

        Reparacion::create($validated);

        return redirect()->route('reparaciones.index')->with('success', 'Reparación registrada correctamente.');
    }

    public function show(string $id)
    {
        $reparacion = Reparacion::with(['celular.marca', 'cliente', 'usuario'])->findOrFail($id);
        return view('reparaciones.show', compact('reparacion'));
    }

    public function edit(string $id)
    {
        $reparacion = Reparacion::findOrFail($id);
        $clientes = Cliente::all();
        $usuarios = Usuario::all();
        $celulares = Celular::with('marca')->get();

        return view('reparaciones.edit', compact('reparacion', 'clientes', 'usuarios', 'celulares'));
    }

    public function update(ReparacionRequest $request, string $id)
    {
        $validated = $request->validated();

        $reparacion = Reparacion::findOrFail($id);
        $reparacion->update($validated);

        return redirect()->route('reparaciones.index')->with('success', 'Reparación actualizada correctamente.');
    }

    public function destroy(string $id)
    {
        $reparacion = Reparacion::findOrFail($id);
        $reparacion->delete();

        return redirect()->route('reparaciones.index')->with('success', 'Reparación eliminada correctamente.');
    }
}
