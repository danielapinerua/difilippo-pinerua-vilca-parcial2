@extends('layouts.layout')
@section('title', 'Nuevo Celular')

@push('styles') <link rel="stylesheet" href="{{ asset('css/celulares/create.css') }}"> @endpush

@section('content')
<section class="celular-create">
    <h2>Nuevo Celular</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('celulares.store') }}" method="POST">
            @csrf
            <label>Marca:</label>
            <select name="marca_id" required>
                <option value="">Seleccione una marca</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ old('marca_id') == $marca->id ? 'selected' : '' }}>
                        {{ $marca->nombre }}
                    </option>
                @endforeach
            </select>

            <label>Modelo:</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" required>

            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
</section>
@endsection