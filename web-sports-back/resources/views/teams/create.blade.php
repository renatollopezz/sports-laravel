
@extends('layout.app')

@section('content')
<h1>Novo Time</h1>

<form action="{{route('teams.store')}}" method="POST">
	{{csrf_field()}}
		{{method_field('POST')}}
<div class="form-group">
		<label for="team-name">Nome: </label>
		<input class="form-control" type="text" name="name" id="team-name">
</div>

<div class="form-group">
		<label for="team-abreviation">Escudo: </label>
		<input class="form-control" type="text" name="abreviation" id="team-abreviation">
</div>

<div class="row">
	<div class="col-md-3">
		<button class="btn btn-success btn-md" type="submit">Salvar</button>
		<a href="{{route('teams.index')}}" class="btn btn-primary btn-md">Voltar</a>

	</div>
</div>
</form>
@endsection
<span class="glyphicons glyphicons-soccer-ball"></span>