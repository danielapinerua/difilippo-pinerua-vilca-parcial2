@extends('layouts.layout')
@section('title', 'Reparaciones')

@push('styles') <link rel="stylesheet" href="{{ asset('css/reparacion/index_reparaciones.css') }}"> @endpush

@section('content')
<section class="reparaciones-index">
    <h2>Listado de Reparaciones</h2>
    <p class="bienvenida">Bienvenido, {{ auth()->user()->nombre }}</p>

    @if(session('success'))
        <div class="success-msg">{{ session('success') }}</div>
    @endif

    <a href="{{ route('reparaciones.create') }}" class="btn-nueva">+ Nueva reparación</a>

    @if($reparaciones->count() > 0)
    <div class="table-wrapper">
        <table>
            <tr>
                <th>Cliente</th>
                <th>Celular</th>
                <th>Marca</th>
                <th>Estado</th>
                <th>Técnico</th>
                <th>Acciones</th>
            </tr>
            @foreach($reparaciones as $reparacion)
            <tr>
                <td>{{ $reparacion->cliente->nombre }}</td>
                <td>{{ $reparacion->celular->modelo }}</td>
                <td>{{ $reparacion->celular->marca->nombre }}</td>
                <td>
                    <span class="estado estado-{{ strtolower($reparacion->estado) }}">
                        {{ $reparacion->estado }}
                    </span>
                </td>
                <td>{{ $reparacion->usuario->nombre }}</td>
                <td>
                    <div class="acciones">
                        <a href="{{ route('reparaciones.show', $reparacion->id) }}">Ver</a>
                        <a href="{{ route('reparaciones.edit', $reparacion->id) }}">Editar</a>
                        <form action="{{ route('reparaciones.destroy', $reparacion->id) }}" method="POST">
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
        <div class="empty">No hay reparaciones cargadas.</div>
    @endif
</section>
@endsection