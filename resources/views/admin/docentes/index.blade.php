@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<h4 class="my-auto">Docentes</h4>
			</div>
      @if(Auth::user()->rol == 'planeacion')
			<div class="col-sm-12 col-md-6 mt-4 mb-4">
				<a href="{{route('docentes.create')}}" class="btn btn-outline-success float-right">Agregar</a>
			</div>
      @endif
		</div>
		<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col" row="1">Nombre completo</th>
      @if(Auth::user()->rol == 'planeacion')
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
      @endif
    </tr>
  </thead>
  <tbody>
  	@foreach($docentes as $docente)
    <tr>
      <th scope="row" width="80%">{{$docente->name}}</th>

      @if(Auth::user()->rol == 'planeacion')
      <td width="20%"><a href="{{route('docentes.edit', $docente->id)}}" class="btn btn-outline-primary">Editar</a></td>
      <td width="10%">
        <form action="{{ route('docentes.destroy', $docente->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </td>
      @endif
    </tr>

    @endforeach
  </tbody>
	</table>
	</div>	

	<div class="mt5 mb-5 pt-5 pb-5 d-flex text-center justify-content-center">
		{!! $docentes->render() !!}
	</div>
@endsection