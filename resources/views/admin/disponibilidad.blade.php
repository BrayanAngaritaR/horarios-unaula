@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<h4 class="my-auto">Disponibilidad de aulas</h4>
			</div>
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<a href="#" class="btn btn-outline-success float-right">Agregar</a>
			</div>
		</div>
		<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col" row="1">Salón</th>
      <th scope="col">Día</th>
      <th scope="col" width="110">Hora entrada</th>
      <th scope="col" width="110">Hora salida</th>
      <th scope="col">Grupo</th>
      <th scope="col">Nombre del profesor</th>
      <th scope="col">Nombre de la materia</th>
      <th scope="col">Código de la materia</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($disponibilidad as $aula)
    <tr>
      <th scope="row">{{$aula->salon}}</th>
      <td>{{$aula->dia}}</td>
      <td>{{$aula->entrada}}</td>
      <td>{{$aula->salida}}</td>
      <td>{{$aula->grupo}}</td>
      <td>{{$aula->nombre_profesor}}</td>
      <td>{{$aula->nombre_materia}}</td>
      <td>{{$aula->codigo_materia}}</td>
      <td><a href="#" class="btn btn-outline-primary">Editar</a></td>
      <td><a href="#" class="btn btn-outline-danger">Eliminar</a></td>
    </tr>

    @endforeach
  </tbody>
	</table>
	</div>	

	<div class="mt5 mb-5 pt-5 pb-5 d-flex text-center justify-content-center">
		{!! $disponibilidad->render() !!}
	</div>
@endsection