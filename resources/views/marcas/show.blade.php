@extends('layouts.layout')
@section('title', 'Detalle de Marca')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/show.css') }}">
@endpush

@section('content')
<div class="container marcas-show px-3">
    <div class="text-center mb-4">
        <h2>Detalle de Marca</h2>
    </div>

    <div class="card shadow-sm border-0 rounded-4 p-4">
        <ul class="list-group list-group-flush rounded-4">
            <li class="list-group-item d-flex justify-content-between py-3 px-0">
                <span class="field-label">Nombre</span>
                <span>{{ $marca->nombre }}</span>
            </li>
        </ul>

        <div class="text-center mt-4">
            <a href="{{ route('marcas.index') }}" class="btn btn-outline-secondary rounded-pill">← Volver al listado</a>
        </div>
    </div>
</div>
@endsection