@extends('layouts.layout')
@section('title', 'Nueva Marca')
@section('content')
<section>
    <h2>Nueva Marca</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('marcas.store') }}" method="POST">
            @csrf
            <label>Nombre:</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required>
            <br><br>
            <button type="submit">Guardar</button>
        </form>
    </div>
</section>
@endsection
