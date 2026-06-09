@extends('layouts.layout')
@section('title', 'Editar Marca')

@push('styles') <link rel="stylesheet" href="{{ asset('css/marcas/edit.css') }}"> @endpush

@section('content')
<section class="marcas-edit">
    <h2>Editar Marca</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $marca->nombre) }}" required>
            
            <button type="submit" class="btn-guardar">Actualizar</button>
        </form>
    </div>
</section>
@endsection