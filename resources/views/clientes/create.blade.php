@extends('layouts.layout')
@section('title', 'Nuevo Cliente')

@push('styles') <link rel="stylesheet" href="{{ asset('css/clientes/create.css') }}"> @endpush

@section('content')
<section class="cliente-create">
    <h2>Nuevo Cliente</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>

            <label>TelÃ©fono:</label>
            <input type="text" name="telefono" value="{{ old('telefono') }}">

            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
</section>
@endsection