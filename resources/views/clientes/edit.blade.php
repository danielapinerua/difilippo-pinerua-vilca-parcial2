@extends('layouts.layout')
@section('title', 'Editar Cliente')
@section('content')
<section>
    <h2>Editar Cliente</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" required>
            <br><br>
            <label>Teléfono:</label><br>
            <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}">
            <br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</section>
@endsection
