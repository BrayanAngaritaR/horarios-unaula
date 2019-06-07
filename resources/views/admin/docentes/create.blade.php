@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ route('docentes.index') }}">&#8592; Volver</a>
</div>
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('docentes.store') }}">
    @csrf
  <div class="form-row">
    <div class="col-sm-12 mb-3">
      <label>Nombre del profesor</label>
      <input type="text" class="form-control" name="name" placeholder="Nombre del profesor" required>
    </div>
  </div>

  <button class="btn btn-success float-right mt-5" type="submit">Agregar información</button>
</form>
</div>
@endsection