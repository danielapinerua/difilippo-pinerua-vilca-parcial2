@extends('layouts.layout')
@section('title', 'Reparaciones')

@section('content')
<section>
    <h2>Listado de Reparaciones</h2>
    <div>
<p>Bienvenida, {{ auth()->user()->name }}</p>

@if(session('success'))
{{ session('success') }}
@endif

@if($reparaciones->count() > 0)
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Celular</th>
        <th>Marca</th>
        <th>Estado</th>
        <th>Técnico</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

    @foreach($reparaciones as $reparacion)
    <tr>
    <td>{{ $reparacion->id }}</td>
    <td>{{ $reparacion->cliente->nombre }}</td>
    <td>{{ $reparacion->celular->modelo }}</td>
    <td>{{ $reparacion->celular->marca->nombre }}</td>
    <td>{{ $reparacion->estado }}</td> 
    <td>{{ $reparacion->usuario->name }}</td> 
    <td>{{ $reparacion->descripcion_falla }}</td>

    <td>
        <a href="{{ route('reparaciones.show', $reparacion->id) }}">Ver</a>
        <a href="{{ route('reparaciones.edit', $reparacion->id) }}">Editar</a>

        <form action="{{ route('reparaciones.destroy', $reparacion->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
    @endforeach

</table>
@else
No hay reparaciones cargadas.
@endif

<a href="{{ route('reparaciones.create') }}">Nueva reparación</a>

<br>
    </div>
</section>
@endsection
