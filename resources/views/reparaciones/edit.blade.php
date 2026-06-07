@extends('layouts.layout')
@section('title', 'Editar Reparación')
@section('content')
<section>
    <h2>Editar Reparación</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('reparaciones.update', $reparacion->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label>Cliente:</label><br>
            <select name="cliente_id" required>
                <option value="">Seleccione un cliente</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id', $reparacion->cliente_id) == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nombre }}
                    </option>
                @endforeach
            </select>
            <br><br>

            <label>Celular:</label><br>
            <select name="celular_id" required>
                <option value="">Seleccione un celular</option>
                @foreach($celulares as $celular)
                    <option value="{{ $celular->id }}" {{ old('celular_id', $reparacion->celular_id) == $celular->id ? 'selected' : '' }}>
                        {{ $celular->modelo }} - {{ $celular->marca->nombre ?? '' }}
                    </option>
                @endforeach
            </select>
            <br><br>

            <label>Técnico:</label><br>
            <select name="usuario_id" required>
                <option value="">Seleccione un técnico</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('usuario_id', $reparacion->usuario_id) == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
            <br><br>

            <label>Estado:</label><br>
            <select name="estado" required>
                <option value="Ingresado" {{ old('estado', $reparacion->estado) == 'Ingresado' ? 'selected' : '' }}>Ingresado</option>
                <option value="Reparando" {{ old('estado', $reparacion->estado) == 'Reparando' ? 'selected' : '' }}>Reparando</option>
                <option value="Reparado" {{ old('estado', $reparacion->estado) == 'Reparado' ? 'selected' : '' }}>Reparado</option>
                <option value="Entregado" {{ old('estado', $reparacion->estado) == 'Entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
            <br><br>

            <label>Descripción de Falla:</label><br>
            <input type="text" name="descripcion_falla" value="{{ old('descripcion_falla', $reparacion->descripcion_falla) }}" required>
            <br><br>

            <button type="submit">Actualizar</button>
        </form>
    </div>
</section>
@endsection
