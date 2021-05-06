@extends('layouts.header')
@yield('header')
@section('contenido')
<h2>Solicitud de vacaciones</h2>
<?php 
$hoy = date("d/m/Y")
?>

<form method="post" action="{{route('tramovacaciones')}}">
{{ csrf_field() }}
<div class="form-group row">
    <label  class="col-sm-2 col-form-label">Fecha de inicio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inicio" placeholder="{{$hoy}}" required>
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Fecha de fin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fin">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Solicitar</label>
    <div class="col-sm-10">
      <input type="submit" class="form-control">
    </div>
  </div>

</form>

@endsection
