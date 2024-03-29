@extends('layouts.app')

@section('content')
@if(Auth::user()->rol == 'planeacion')
<div class="container">
  <a href="{{ route('disponibilidad.index') }}">&#8592; Volver</a>
</div>  
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('disponibilidad.store') }}">
    @csrf
  <div class="form-row">
    <div class="col-lg-2 col-md-4 mb-3">
      <label >Salón</label>
      <input type="text" class="form-control" placeholder="Salón"  name="salon" required>
    </div>
    <div class="col-lg-2 col-md-4 mb-3">
      <label for="validationServer02">Día</label>
       <div class="form-group">
        <select class="custom-select"  name="dia" required>
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
      <label>Hora entrada</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">&#128341;</span>
        </div>
        <input type="text" class="form-control"placeholder="08:00"  name="entrada" required>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 mb-3">
      <label>Hora salida</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">&#128349;</span>
        </div>
        <input type="text" class="form-control"placeholder="16:00"  name="salida" required>
      </div>
    </div>

    <div class="col-lg-2 col-md-4 mb-3">
      <label>Grupo</label>
      <div class="input-group">
        <div class="input-group-prepend">
        </div>
        <input type="text" class="form-control"placeholder="500"  name="grupo" required>
      </div>
    </div>


  </div>
  <div class="form-row">
    <div class="col-lg-5 col-md-4 mb-3">
      <label >Nombre del profesor</label>
      <input type="text" class="form-control" placeholder="Nombre del profesor"  name="nombre_profesor" required>
    </div>
    <div class="col-lg-4 col-md-4 mb-3">
      <label >Nombre de la materia</label>
      <input type="text" class="form-control" placeholder="Nombre de la materia"  name="nombre_materia" required>
    </div>
    <div class="col-lg-3 col-md-4 mb-3">
      <label>Código materia</label>
      <input type="text" class="form-control" placeholder="Código materia"  name="codigo_materia" required>
    </div>
  </div>
  <button class="btn btn-success float-right mt-5" type="submit">Agregar información</button>
</form>
</div>

@else
<div class="container mt-2">
    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
      <strong>No tienes acceso para ver este contenido</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
</div>
@endif
@endsection