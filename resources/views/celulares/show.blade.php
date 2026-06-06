@extends('layouts.layout')
@section('title', 'Detalle de Celular')
@section('content')
<section>
    <h2>Detalle de Celular</h2>
    <div>
        <p><strong>ID:</strong> {{ $celular->id }}</p>
        <p><strong>Marca:</strong> {{ $celular->marca->nombre ?? 'Sin Marca' }}</p>
        <p><strong>Modelo:</strong> {{ $celular->modelo }}</p>
        <a href="{{ route('celulares.index') }}">Volver al listado</a>
    </div>
</section>
@endsection
