
@extends('layout.app')

@section('content')
<h1>Times</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="{{route('teams.create')}}">Novo time</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
			<td>Opções</td>

		</tr>
	</tbody>
@foreach($teams as $team)
	<tr>
		<td>{{$team -> name}}</td>
		<td>
			<a href="{{route('teams.show',$team->id)}}" class="btn btn-info">Visualizar</a>
			<a href="{{route('teams.edit',$team->id)}}" class="btn btn-warning">Editar</a>
			<a href="{{url('/teams/delete',$team->id)}}" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
@endforeach
</table>
@endsection