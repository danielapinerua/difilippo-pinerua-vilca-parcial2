@extends('layouts.layout')
@section('title', 'Nueva Reparación')

@section('content')
<section>
    <h2>Nueva Reparación</h2>
    <div>
        @if ($errors->any())

        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach

        @endif
        
        <form method="POST" action="{{ route('reparaciones.store') }}">
            @csrf
            <label>Cliente:</label><br>
            <select name="cliente_id">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">
                    {{ $cliente->nombre }}
                </option>
                @endforeach
            </select>
            <br><br>
            <label>Celular:</label><br>
            <select name="celular_id">
                @foreach($celulares as $celular)
                <option value="{{ $celular->id }}">
                    {{ $celular->modelo }} - {{ $celular->marca->nombre }}
                </option>
                @endforeach
            </select>
            <br><br>
            <label>Técnico:</label><br>
            <select name="usuario_id">
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">
                    {{ $usuario->nombre }}
                </option>
                @endforeach
            </select>
            <br><br>
            <label>Descripción:</label><br>
            <input type="text" name="descripcion_falla">
            <br><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</section>
@endsection
