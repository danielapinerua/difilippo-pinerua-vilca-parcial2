@extends('layouts.layout')
@section('title', 'Detalle de Marca')
@section('content')
<section>
    <h2>Detalle de Marca</h2>
    <div>
        <p><strong>ID:</strong> {{ $marca->id }}</p>
        <p><strong>Nombre:</strong> {{ $marca->nombre }}</p>
        <a href="{{ route('marcas.index') }}">Volver al listado</a>
    </div>
</section>
@endsection
