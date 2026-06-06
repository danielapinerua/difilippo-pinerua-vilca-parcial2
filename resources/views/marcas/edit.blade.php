@extends('layouts.layout')
@section('title', 'Editar Marca')
@section('content')
<section>
    <h2>Editar Marca</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre', $marca->nombre) }}" required>
            <br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</section>
@endsection
