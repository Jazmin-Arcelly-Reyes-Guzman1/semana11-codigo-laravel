@extends('layout')

@section('title','Servicio | ' . $servicio->titulo)
@section('content')
@auth
<table cellpadding="3" cellspacing="5">
    <tr>
        <td colspan="4">
            {{ $servicio->titulo }}
            <a href="{{ route('servicios.edit', $servicio) }}" class="action-button">Editar</a>
            <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button class="action-button delete-button">Eliminar</button>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->descripcion }}</td>
    </tr>
    <tr>
        <td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
    </tr>
</table>
@endauth
@endsection
