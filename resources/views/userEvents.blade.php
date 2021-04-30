@extends('layouts.header')
@yield('header')
@section('contenido')
<h2>Visualizacion de eventos</h2>


    <table>
    <tr>
        <td><strong>Id</strong></td>
        <td><strong>Descripcion</strong></td>
        <td><strong>Finalizacion</strong></td>
    </tr>
    @foreach($eventos as $fila)
        <tr>
        <td>{{ $fila['id']}}</td>
        <td>{{ $fila['descripcion']}}</td>
        <td>{{ $fila['finalizacion']}}</td>
        </tr>
    @endforeach
    </table>



@endsection
