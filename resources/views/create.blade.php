@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
    <table cellpadding="3" cellspacing="5" style="background-color: white; width: 100%;">
        <tr>
            <th colspan="4">Crear nueva Servicio</th>
        </tr>
        <tr>
            <td colspan="4">
                @include('partials.validation-errors')
                <form action="{{ route('servicios.store') }}" method="post">
                    @csrf
                    @include('partials.form', ['btnText' => 'Guardar'])
                </form>
            </td>
        </tr>
    </table>
@endsection
