@extends('layouts.layout')
@section('title', 'Nueva Marca')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/marcas_create.css') }}">
@endpush

@section('content')
<div class="container marcas-create px-3">
    <div class="text-center mb-4">
        <h2>Nueva Marca</h2>
    </div>

    <div class="card shadow-sm border-0 rounded-4 p-4">
        @if ($errors->any())
        <div class="alert alert-danger rounded-3">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('marcas.store') }}" method="POST">
            @csrf
            <label class="form-label">Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required class="form-control mb-3">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection