@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="mt-4 mb-4">
			<h4>Lista de aulas</h4>
		</div>
		<ul class="list-group list-group-flush">
			@foreach($aulas as $aula)
				<li class="list-group-item">Código de aula: {{$aula->codigo_aula}} </li>
			@endforeach
		</ul>
	</div>	
@endsection