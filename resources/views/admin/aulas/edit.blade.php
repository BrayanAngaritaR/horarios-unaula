@extends('layouts.app')

@section('content')
<div class="container">
  <a href="{{ route('aulas.index') }}">&#8592; Volver</a>
</div>
<div class="container mt-5 mb-5">
  <form method="POST" action="{{ route('aulas.update', $aula->id) }}">
    @csrf
    @method('PATCH')
  <div class="form-row">
    <div class="col-sm-12 mb-3">
      <label>Salón</label>
      <input type="text" class="form-control" name="codigo_aula" value="{{ $aula->codigo_aula }}" required>
    </div>
  </div>

  @if($aula->updated_at != NULL)
  <h6>Última actualización {{ $aula->updated_at->diffForHumans() }}</h6>
  @endif

  <button class="btn btn-success float-right mt-5" type="submit">Agregar información</button>
</form>
</div>
@endsection