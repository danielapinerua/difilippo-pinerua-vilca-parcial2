@extends('layouts.layout')
@section('title', 'Nuevo Cliente')
@section('content')
<section>
    <h2>Nuevo Cliente</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
            <br><br>
            <label>Teléfono:</label><br>
            <input type="text" name="telefono" value="{{ old('telefono') }}">
            <br><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</section>
@endsection
