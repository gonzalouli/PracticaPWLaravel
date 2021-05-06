@extends('layouts.header')
@yield('header')
@section('contenido')
<h2>Solicitud de vacaciones</h2>
<?php 
$hoy = date("d/m/Y")
?>
<form method="post" action="{{route('tramovacaciones')}}">
<div class="form-group row">
    <label for="inputmodelo" class="col-sm-2 col-form-label">Fecha de inicio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inicio" placeholder="{{$hoy}}" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPuertas" class="col-sm-2 col-form-label">Fecha de fin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fin">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPuertas" class="col-sm-2 col-form-label">Solicitar</label>
    <div class="col-sm-10">
      <input type="submit" class="form-control">
    </div>
  </div>

</form>

@endsection
