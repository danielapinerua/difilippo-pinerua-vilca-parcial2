@extends('layouts.layout')
@section('title', 'Detalle de Cliente')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/clientes/show.css') }}">
@endpush

@section('content')
<section class="cliente-show">
    <h2>Detalle de Cliente</h2>
    <div class="card">
        <p><strong>ID:</strong> {{ $cliente->id }}</p>
        <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
    </div>
    <a href="{{ route('clientes.index') }}" class="btn-volver">← Volver al listado</a>
</section>
@endsection