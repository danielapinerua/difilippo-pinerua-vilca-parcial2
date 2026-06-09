@extends('layouts.layout')
@section('title', 'Editar ReparaciÃ³n')

@push('styles') <link rel="stylesheet" href="{{ asset('css/reparacion/create.css') }}"> @endpush

@section('content')
<section class="reparacion-create">
    <h2>Editar ReparaciÃ³n</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('reparaciones.update', $reparacion->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Cliente:</label>
            <select name="cliente_id" required>
                <option value="">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id', $reparacion->cliente_id) == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }}
                    </option>
                @endforeach
            </select>

            <label>Celular:</label>
            <select name="celular_id" required>
                <option value="">Seleccione un celular</option>
                @foreach($celulares as $celular)
                    <option value="{{ $celular->id }}" {{ old('celular_id', $reparacion->celular_id) == $celular->id ? 'selected' : '' }}>
                        {{ $celular->modelo }} - {{ $celular->marca->nombre ?? '' }}
                    </option>
                @endforeach
            </select>

            <label>Técnico:</label>
            <select name="usuario_id" required>
                <option value="">Seleccione un técnico</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('usuario_id', $reparacion->usuario_id) == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>

            <label>Estado:</label>
            <select name="estado" required>
                <option value="Ingresado" {{ old('estado', $reparacion->estado) == 'Ingresado' ? 'selected' : '' }}>Ingresado</option>
                <option value="Reparando" {{ old('estado', $reparacion->estado) == 'Reparando' ? 'selected' : '' }}>Reparando</option>
                <option value="Reparado" {{ old('estado', $reparacion->estado) == 'Reparado' ? 'selected' : '' }}>Reparado</option>
                <option value="Entregado" {{ old('estado', $reparacion->estado) == 'Entregado' ? 'selected' : '' }}>Entregado</option>
            </select>

            <label>Descripción de Falla:</label>
            <input type="text" name="descripcion_falla" value="{{ old('descripcion_falla', $reparacion->descripcion_falla) }}" required>

            <button type="submit" class="btn-guardar">Actualizar</button>
        </form>
    </div>
</section>
@endsection