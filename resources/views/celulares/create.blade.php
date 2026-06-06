@extends('layouts.layout')
@section('title', 'Nuevo Celular')
@section('content')
<section>
    <h2>Nuevo Celular</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('celulares.store') }}" method="POST">
            @csrf
            <label>Marca:</label><br>
            <select name="marca_id" required>
                <option value="">Seleccione una marca</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ old('marca_id') == $marca->id ? 'selected' : '' }}>
                        {{ $marca->nombre }}
                    </option>
                @endforeach
            </select>
            <br><br>
            <label>Modelo:</label><br>
            <input type="text" name="modelo" value="{{ old('modelo') }}" required>
            <br><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</section>
@endsection
