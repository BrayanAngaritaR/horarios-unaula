@extends('layouts.app')

@section('content')
@if(Auth::user()->rol == 'planeacion')
<div class="container">
  <a href="{{ route('aulas.index') }}">&#8592; Volver</a>
</div>
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('aulas.store') }}">
    @csrf
  <div class="form-row">
    <div class="col-sm-12 mb-3">
      <label>Salón</label>
      <input type="text" class="form-control" name="codigo_aula" placeholder="Salón" required>
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