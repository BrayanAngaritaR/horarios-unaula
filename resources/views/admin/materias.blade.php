@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="mt-4 mb-4">
			<h4>Lista de materias</h4>
		</div>
		<ul class="list-group list-group-flush">
			@foreach($materias as $materia)
				<li class="list-group-item">{{$materia->name}} <span class="float-right">{{$materia->codigo}}</span></li>
			@endforeach
		</ul>
	</div>	
@endsection