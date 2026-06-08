@extends('layouts.layout')
@section('title', 'Editar Cliente')

@push('styles') <link rel="stylesheet" href="{{ asset('css/clientes/edit.css') }}"> @endpush

@section('content')
<section class="cliente-edit">
    <h2>Editar Cliente</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" required>

            <label>Teléfono:</label>
            <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}">

            <button type="submit">Actualizar</button>
        </form>
    </div>
</section>
@endsection