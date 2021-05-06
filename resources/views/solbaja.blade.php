<?php 
$hoy = date("d/m/Y")
?>

<form action="{{url('solicitudBaja')}}" method="POST">
    {{ csrf_field() }}
  <div class="form-group row">
    <label for="inputvehiculo" class="col-sm-2 col-form-label">Motivo de la baja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="motivo">
    </div>
  </div>
  
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
    <label for="inputLuces" class="col-sm-2 col-form-label">Observaciones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="observaciones" >
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>