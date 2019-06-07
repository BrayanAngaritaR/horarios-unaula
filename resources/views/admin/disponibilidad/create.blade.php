@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('disponibilidad.store') }}">
    @csrf
  <div class="form-row">
    <div class="col-lg-2 col-md-4 mb-3">
      <label for="validationServer01">Salón</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="Salón" required>
    </div>
    <div class="col-lg-2 col-md-4 mb-3">
      <label for="validationServer02">Día</label>
       <div class="form-group">
        <select class="custom-select" required>
          <option value="L">L</option>
          <option value="M">M</option>
          <option value="W">W</option>
          <option value="J">J</option>
          <option value="V">V</option>
          <option value="S">S</option>
          <option value="D">D</option>
        </select>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 mb-3">
      <label for="validationServerUsername">Hora entrada</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">&#128341;</span>
        </div>
        <input type="text" class="form-control" id="validationServerUsername" placeholder="08:00" aria-describedby="inputGroupPrepend3" required>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 mb-3">
      <label for="validationServerUsername">Hora salida</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">&#128349;</span>
        </div>
        <input type="text" class="form-control" id="validationServerUsername" placeholder="16:00" aria-describedby="inputGroupPrepend3" required>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 mb-3">
      <label for="validationServerUsername">Grupo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">&#128349;</span>
        </div>
        <input type="text" class="form-control" id="validationServerUsername" placeholder="500" aria-describedby="inputGroupPrepend3" required>
      </div>
    </div>


  </div>
  <div class="form-row">
    <div class="col-lg-5 col-md-4 mb-3">
      <label for="validationServer03">Nombre del profesor</label>
      <input type="text" class="form-control" id="validationServer03" placeholder="Nombre del profesor" required>
    </div>
    <div class="col-lg-4 col-md-4 mb-3">
      <label for="validationServer04">Nombre de la materia</label>
      <input type="text" class="form-control" id="validationServer04" placeholder="Nombre de la materia" required>
    </div>
    <div class="col-lg-3 col-md-4 mb-3">
      <label for="validationServer05">Código materia</label>
      <input type="text" class="form-control" id="validationServer05" placeholder="Código materia" required>
    </div>
  </div>
  <button class="btn btn-success float-right mt-5" type="submit">Agregar información</button>
</form>
</div>
@endsection