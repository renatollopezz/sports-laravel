@extends('layout.app')

@section('content')

<h1>Edição do time</h1>
<form action="{{route('teams.update',$team->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('PUT')}}
<div class="form-group">
	<label for="team-name">Nome: </label>
	<input class="form-control" value="{{$team->name}}"type="text" name="name" id="team-name">
</div>
<div class="form-group">

	<label for="team-abreviation">Escudo: </label>
	<input class="form-control" value="{{$team->abreviation}}" type="text" name="abreviation" id="team-abreviation">
</div>
	<button class="btn btn-md btn-success" type="submit">Salvar</button>
	<a href="{{route('matches.index')}}" class="btn btn-primary btn-md">Voltar</a>
</form>
@endsection