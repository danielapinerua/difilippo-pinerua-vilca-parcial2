@extends('layouts.layout')
@section('title', 'Detalle de Reparación')
@section('content')
<section>
    <h2>Detalle de Reparación</h2>
    <div>
        <p><strong>ID:</strong> {{ $reparacion->id }}</p>
        <p><strong>Cliente:</strong> {{ $reparacion->cliente->nombre ?? 'N/A' }}</p>
        <p><strong>Celular:</strong> {{ $reparacion->celular->modelo ?? 'N/A' }} ({{ $reparacion->celular->marca->nombre ?? 'N/A' }})</p>
        <p><strong>Técnico:</strong> {{ $reparacion->usuario->nombre ?? 'N/A' }}</p>
        <p><strong>Descripción de Falla:</strong> {{ $reparacion->descripcion_falla }}</p>
        <p><strong>Estado:</strong> {{ $reparacion->estado }}</p>
        <p><strong>Fecha de Ingreso:</strong> {{ $reparacion->fecha_ingreso }}</p>
        <a href="{{ route('reparaciones.index') }}">Volver al listado</a>
    </div>
</section>
@endsection
