@extends('layouts.layout')
@section('title', 'Nueva Reparación')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/reparacion/create.css') }}">
@endpush

@section('content')

<section class="reparacion-create">
    <h2>Nueva Reparación</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif
        
        <form method="POST" action="{{ route('reparaciones.store') }}">
            @csrf
            <label>Cliente:</label>
            <select name="cliente_id">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>

            <label>Celular:</label>
            <select name="celular_id">
                @foreach($celulares as $celular)
                <option value="{{ $celular->id }}">{{ $celular->modelo }} - {{ $celular->marca->nombre }}</option>
                @endforeach
            </select>

            <label>Técnico:</label>
            <select name="usuario_id">
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                @endforeach
            </select>

            <label>Estado:</label>
            <select name="estado">
                <option value="">Seleccione estado</option>
                <option value="Ingresado">Ingresado</option>
                <option value="Reparando">Reparando</option>
                <option value="Reparado">Reparado</option>
                <option value="Entregado">Entregado</option>
            </select>

            <label>Descripción:</label>
            <input type="text" name="descripcion_falla">

            <button type="submit">Guardar</button>
        </form>
    </div>
</section>
@endsection