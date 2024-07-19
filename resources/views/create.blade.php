@extends('layout')

@section('title','Crear Servicio')

@section('content')
<table cellpadding="3" cellspaceing="5" style="background-color: white;">
    <tr>
        <th colspan="4">Crear nueva Servicio</th>
    </tr> 
@include('partials.validation-errors')
<form action="{{route('servicios.store')}}" method="post">
@include('partials.form',['btnText' => 'Guardar'])
</form>
</table>
@endsection
