@extends('layouts.layout')
@section('title', 'Editar Celular')
@section('content')
<section>
    <h2>Editar Celular</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('celulares.update', $celular->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Marca:</label><br>
            <select name="marca_id" required>
                <option value="">Seleccione una marca</option>
                @foreach($marcas as $marca)
                    <option value="{{ $marca->id }}" {{ old('marca_id', $celular->marca_id) == $marca->id ? 'selected' : '' }}>
                        {{ $marca->nombre }}
                    </option>
                @endforeach
            </select>
            <br><br>
            <label>Modelo:</label><br>
            <input type="text" name="modelo" value="{{ old('modelo', $celular->modelo) }}" required>
            <br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</section>
@endsection
