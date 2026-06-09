@extends('layouts.layout')
@section('title', 'Celulares')

@push('styles') <link rel="stylesheet" href="{{ asset('css/celulares/celulares_index.css') }}"> @endpush

@section('content')
<section class="celulares-index">
    <h2>Listado de Celulares</h2>
    
    <a href="{{ route('celulares.create') }}" class="btn-nueva">+ Nuevo Celular</a>
    
    @if($celulares->count() > 0)
    <div class="table-wrapper">
        <table>
            <tr>
                <th>Modelo</th>
                <th>Marca</th>
                <th class="th-actions">Acciones</th>
            </tr>
            @foreach ($celulares as $celular)
            <tr>
                <td>{{ $celular->modelo }}</td>
                <td class='td-marca'>{{ $celular->marca->nombre ?? 'Sin Marca' }}</td>
                <td>
                    <div class="acciones">
                        <a href="{{ route('celulares.show', $celular->id) }}">Ver</a>
                        <a href="{{ route('celulares.edit', $celular->id) }}">Editar</a>
                        <form action="{{ route('celulares.destroy', $celular->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @else
        <div class="empty">No hay celulares cargados.</div>
    @endif
</section>
@endsection