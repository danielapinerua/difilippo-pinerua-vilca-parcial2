@extends('layouts.layout')
@section('title', 'Nueva Marca')

@push('styles') <link rel="stylesheet" href="{{ asset('css/marcas/create.css') }}"> @endpush

@section('content')
<section class="marcas-create">
    <h2>Nueva Marca</h2>
    <div>
        @if ($errors->any())
        <div class="error-list">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
        @endif

        <form action="{{ route('marcas.store') }}" method="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
            
            <button type="submit" class="btn-guardar">Guardar</button>
        </form>
    </div>
</section>
@endsection