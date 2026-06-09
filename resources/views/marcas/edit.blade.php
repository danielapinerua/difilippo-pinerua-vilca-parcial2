@extends('layouts.layout')
@section('title', 'Editar Marca')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/edit.css') }}">
@endpush

@section('content')
<div class="container marcas-edit px-3">
    <div class="text-center mb-4">
        <h2>Editar Marca</h2>
    </div>

    <div class="card shadow-sm border-0 rounded-4 p-4">
        @if ($errors->any())
        <div class="alert alert-danger rounded-3">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre', $marca->nombre) }}" required class="form-control mb-3">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill">Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection