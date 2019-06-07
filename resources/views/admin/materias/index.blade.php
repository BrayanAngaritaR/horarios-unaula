@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<h4 class="my-auto">Materias</h4>
			</div>
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<a href="{{route('materias.create')}}" class="btn btn-outline-success float-right">Agregar</a>
			</div>
		</div>
		<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col" row="1">Nombre</th>
      <th scope="col" row="1">Código</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($materias as $materia)
    <tr>
      <th scope="row" width="40%">{{$materia->name}}</th>
      <th scope="row" width="40%">{{$materia->codigo}}</th>
      <td width="20%"><a href="{{route('materias.edit', $materia->id)}}" class="btn btn-outline-primary">Editar</a></td>
      <td width="10%">
        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </td>
    </tr>

    @endforeach
  </tbody>
	</table>
	</div>	

	<div class="mt5 mb-5 pt-5 pb-5 d-flex text-center justify-content-center">
		{!! $materias->render() !!}
	</div>
@endsection