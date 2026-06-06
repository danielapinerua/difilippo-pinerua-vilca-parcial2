@extends('layouts.layout')
@section('title', 'Detalle de Cliente')
@section('content')
<section>
    <h2>Detalle de Cliente</h2>
    <div>
        <p><strong>ID:</strong> {{ $cliente->id }}</p>
        <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
        <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
        <a href="{{ route('clientes.index') }}">Volver al listado</a>
    </div>
</section>
@endsection
