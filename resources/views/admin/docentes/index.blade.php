@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<h4 class="my-auto">Docentes</h4>
			</div>
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<a href="{{route('docentes.create')}}" class="btn btn-outline-success float-right">Agregar</a>
			</div>
		</div>
		<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col" row="1">Nombre completo</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($docentes as $profesor)
    <tr>
      <th scope="row" width="80%">{{$profesor->name}}</th>
      <td width="20%"><a href="{{route('docentes.edit', $profesor->id)}}" class="btn btn-outline-primary">Editar</a></td>
      <td width="10%">
        <form action="{{ route('docentes.destroy', $profesor->id) }}" method="POST">
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
		{!! $docentes->render() !!}
	</div>
@endsection