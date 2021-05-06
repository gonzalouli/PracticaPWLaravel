@extends('layouts.header')
@yield('header')
@section('contenido')
<h2>Fichaje de horrario</h2>

<form method="post" action="{{route('fentrada')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
<button type="submit" class="btn btn-primary" >Entrada</button>
</form>

<form method="post" action="{{route('fsalida')}}">
<button type="submit" class="btn btn-danger" >Salida</button>
</form>

@endsection
