@extends('layouts.layout')
@section('title', 'Marcas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/marcas_index.css') }}">
@endpush

@section('content')
<div class="container marcas-index px-3">
    <div class="text-center mb-4">
        <h2>Listado de Marcas</h2>
        <a href="{{ route('marcas.create') }}" class="btn btn-primary rounded-pill mt-2">+ Nueva Marca</a>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <ul class="list-group list-group-flush rounded-4">
            @foreach ($marcas as $marca)
                <li class="list-group-item d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-3 px-4 gap-2">
                    <span class="marca-nombre">{{ $marca->nombre }}</span>
                    <div class="d-flex gap-2">
                        <a href="{{ route('marcas.show', $marca->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                        <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                        <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger btn-eliminar">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection