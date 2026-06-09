@extends('layouts.layout')
@section('title', 'Marcas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/marcas_index.css') }}">
@endpush

@section('content')
<section class="marcas-index">
    <h2>Listado de Marcas</h2>
    <a href="{{ route('marcas.create') }}" class="btn-nueva">+ Nueva Marca</a>
    
    @if($marcas->count() > 0)
    <ul>
        @foreach ($marcas as $marca)
            <li>
                <div class="marca-info">
                    <span>{{ $marca->nombre }}</span>
                </div>
                <div class="acciones">
                    <a href="{{ route('marcas.show', $marca->id) }}">Ver</a>
                    <a href="{{ route('marcas.edit', $marca->id) }}">Editar</a>
                    <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    @else
        <div class="empty">No hay marcas cargadas.</div>
    @endif
</section>
@endsection