<?php 
$hoy = date("d/m/Y")
?>

<form action="/baja/solicitada" method="POST">
  {{ csrf_field() }}
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Motivo de la baja</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="motivo">
    </div>
  </div>
  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Fecha de inicio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inicio" placeholder="{{$hoy}}" required>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Fecha de fin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fin">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Observaciones</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="observaciones" >
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" class="btn btn-primary"\>
    </div>
  </div>
</form>