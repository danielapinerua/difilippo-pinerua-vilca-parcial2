@extends('layouts.layout')
@section('title', 'Celulares')
@section('content')
<section>
    <h2>Listado de Celulares</h2>
    <div>
        <a href="{{ route('celulares.create') }}">Nuevo Celular</a>
        <ul>
            @foreach ($celulares as $celular)
                <li>
                    {{ $celular->marca->nombre ?? 'Sin Marca' }} - {{ $celular->modelo }}
                    <a href="{{ route('celulares.show', $celular->id) }}">Ver</a>
                    <a href="{{ route('celulares.edit', $celular->id) }}">Editar</a>
                    <form action="{{ route('celulares.destroy', $celular->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
