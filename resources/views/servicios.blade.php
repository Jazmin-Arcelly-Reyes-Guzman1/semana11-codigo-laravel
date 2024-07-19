@extends('layout')

@section('content')
    <h2>Servicios </h2>
    <tr>
        @auth
        <td colspan="4" style="background-color: white;">
            <a href="{{route('servicios.create')}}">Nuevo Servicio</a>
        </td>
        @endauth
    </tr>
    <tr>
        @if ($servicios)
            @foreach ($servicios as $servicio)
                <td style="background-color: white;">
                    {{-- <strong>{{$item->id}}</strong><br>
                    <strong>{{$item->titulo}}</strong><br>
                    {{$item->descripcion}} --}}
                    <a href="{{ route('servicios.show',$servicio->id) }}">{{ $servicio->titulo }}</a>
                </td>
            @endforeach
            <tr>
                <td colspan="4">{{$servicios->links('pagination::bootstrap-4')}}</td>
            </tr>
        @else
            <td>No existe ningun servicio</td>
        @endif
    <tr>

@endsection
