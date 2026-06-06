@extends('layouts.layout')
@section('title', 'Clientes')
@section('content')
<section>
    <h2>Listado de Clientes</h2>
    <div>
        <a href="{{ route('clientes.create') }}">Nuevo Cliente</a>
        <ul>
            @foreach ($clientes as $cliente)
                <li>
                    {{ $cliente->nombre }} - Tel: {{ $cliente->telefono }}
                    <a href="{{ route('clientes.show', $cliente->id) }}">Ver</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
