@extends('layouts.layout')
@section('title', 'Detalle de Celular')

@push('styles') <link rel="stylesheet" href="{{ asset('css/celulares/show.css') }}"> @endpush

@section('content')
<section class="celular-show">
    <h2>Detalle de Celular</h2>
    <div class="card">
        <p><strong>ID:</strong> {{ $celular->id }}</p>
        <p><strong>Marca:</strong> {{ $celular->marca->nombre ?? 'Sin Marca' }}</p>
        <p><strong>Modelo:</strong> {{ $celular->modelo }}</p>
    </div>
    <a href="{{ route('celulares.index') }}" class="btn-volver">← Volver al listado</a>
</section>
@endsection