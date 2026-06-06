@extends('layouts.layout')
@section('title', 'Marcas')
@section('content')
<section>
    <h2>Listado de Marcas</h2>
    <div>
        <a href="{{ route('marcas.create') }}">Nueva Marca</a>
        <ul>
            @foreach ($marcas as $marca)
                <li>
                    {{ $marca->nombre }}
                    <a href="{{ route('marcas.show', $marca->id) }}">Ver</a>
                    <a href="{{ route('marcas.edit', $marca->id) }}">Editar</a>
                    <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display:inline;">
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
