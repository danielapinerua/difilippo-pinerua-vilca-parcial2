@extends('layouts.layout')
@section('title', 'Celulares')

@push('styles') <link rel="stylesheet" href="{{ asset('css/celulares/celulares_index.css') }}"> @endpush

@section('content')
<section class="celulares-index">
    <h2>Listado de Celulares</h2>
    <a href="{{ route('celulares.create') }}" class="btn-nueva">+ Nuevo Celular</a>
    
    @if($celulares->count() > 0)
    <ul>
        @foreach ($celulares as $celular)
            <li>
                <div class="celular-info">
                    <span>{{ $celular->modelo }}</span>
                    <small class="celular-marca">{{ $celular->marca->nombre ?? 'Sin Marca' }}</small>
                </div>
                <div class="acciones">
                    <a href="{{ route('celulares.show', $celular->id) }}">Ver</a>
                    <a href="{{ route('celulares.edit', $celular->id) }}">Editar</a>
                    <form action="{{ route('celulares.destroy', $celular->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
    @else
        <div class="empty">No hay celulares cargados.</div>
    @endif
</section>
@endsection