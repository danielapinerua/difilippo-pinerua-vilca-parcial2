@extends('layouts.layout')
@section('title', 'Detalle de Reparación')

@push('styles') <link rel="stylesheet" href="{{ asset('css/reparacion/show.css') }}"> @endpush

@section('content')
<section class="reparacion-show">
    <h2>Detalle de Reparación</h2>
    <div class="card">
        <p><strong>ID:</strong> {{ $reparacion->id }}</p>
        <p><strong>Cliente:</strong> {{ $reparacion->cliente->nombre ?? 'N/A' }}</p>
        <p><strong>Celular:</strong> {{ $reparacion->celular->modelo ?? 'N/A' }} ({{ $reparacion->celular->marca->nombre ?? 'N/A' }})</p>
        <p><strong>Técnico:</strong> {{ $reparacion->usuario->nombre ?? 'N/A' }}</p>
        <p><strong>Descripción de Falla:</strong> {{ $reparacion->descripcion_falla }}</p>
        <p>
            <strong>Estado:</strong>
            <span class="estado estado-{{ strtolower($reparacion->estado) }}">{{ $reparacion->estado }}</span>
        </p>
        <p><strong>Fecha de Ingreso:</strong> {{ $reparacion->fecha_ingreso }}</p>
    </div>
    <a href="{{ route('reparaciones.index') }}" class="btn-volver">← Volver al listado</a>
</section>
@endsection