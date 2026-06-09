@extends('layouts.layout')
@section('title', 'Detalle de Marca')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/marcas/show.css') }}">
@endpush

@section('content')
<section class="marcas-show">
    <h2>Detalle de Marca</h2>
    <div class="card">
        <p><strong>Nombre:</strong> {{ $marca->nombre }}</p>
    </div>
    <a href="{{ route('marcas.index') }}" class="btn-volver">← Volver al listado</a>
</section>
@endsection