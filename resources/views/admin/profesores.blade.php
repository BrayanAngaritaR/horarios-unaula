@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="mt-4 mb-4">
			<h4>Lista de profesores</h4>
		</div>
		<ul class="list-group list-group-flush">
			@foreach($profesores as $profesor)
				<li class="list-group-item">{{$profesor->name}}</li>
			@endforeach
		</ul>
	</div>	
@endsection