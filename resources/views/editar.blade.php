@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<table cellpadding='3' cellspacing='5'>
    <tr>
        @auth
        <th colspan="4">Editar Servicio</th>
        @endauth
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('servicios.update', $servicio) }}" method="post">
        @method('PATCH')
        @csrf
        @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
</table>
@endsection

