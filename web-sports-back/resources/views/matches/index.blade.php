
@extends('layout.app')

@section('content')

<h1>Partidas</h1>
<div class="row">
	<div class="col-md-6">
		<a href="{{route('matches.create')}}" type="button" class="btn btn-primary btn-md">Nova partida</a>
	</div>
</div>

<table class="table container">

<tbody>
		<tr>
			<td>Time casa</td>
			<td>Time fora</td>
			<td>Status jogo</td>
			<td>Data</td>
			<td>Opções</td>

		</tr>
</tbody>
@foreach($matches as $match)
	<tr>
		<td>{{$match->home->name}}</td>
		<td>{{$match->away->name}}</td>
		<td>{{$match->cs_status}}</td>
		<td>{{date('d/m/Y',strtotime($match->dt_match))}}</td>
			
		<td>
			<a href="{{route('matches.show',$match->id)}}" class="btn btn-info">Visualizar</a>
			<a href="{{route('matches.edit',$match->id)}}" class="btn btn-warning">Editar</a>
			<a href="{{url('matches/delete',$match->id)}}" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
@endforeach

</table>

@endsection