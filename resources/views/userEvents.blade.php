@extends('layouts.header')
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
        <td>$eventos['id']</td>
        <td>$eventos['descripcion']</td>
        <td>$eventos['fin']</td>
        </tr>
    @endforeach




@endsection
