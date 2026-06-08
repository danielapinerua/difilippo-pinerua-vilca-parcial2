@extends('layouts.layout')
@section('title', 'Clientes')

@push('styles') <link rel="stylesheet" href="{{ asset('css/clientes/clientes_index.css') }}"> @endpush

@section('content')
<section class="clientes-index">
    <h2>Listado de Clientes</h2>
    <a href="{{ route('clientes.create') }}" class="btn-nueva">+ Nuevo Cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <div class="cliente-info">
                    <span>{{ $cliente->nombre }}</span>
                    <small>Tel: {{ $cliente->telefono }}</small>
                </div>
                <div class="acciones">
                    <a href="{{ route('clientes.show', $cliente->id) }}">Ver</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</section>
@endsection