@extends('layouts.app')

@section('content')
@if(Auth::user()->rol == 'planeacion')
<div class="container">
  <a href="{{ route('materias.index') }}">&#8592; Volver</a>
</div>
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('materias.update', $materia->id) }}">
    @csrf
    @method('PATCH')
  <div class="form-row">
    <div class="col-sm-6 mb-3">
      <label>Codigo</label>
      <input type="text" class="form-control" name="codigo" value="{{ $materia->codigo }}" required>
    </div>

    <div class="col-sm-6 mb-3">
      <label>Nombre</label>
      <input type="text" class="form-control" name="name" value="{{ $materia->name }}" required>
    </div>
  </div>

  @if($materia->updated_at != NULL)
  <h6>Última actualización {{ $materia->updated_at->diffForHumans() }}</h6>
  @endif

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