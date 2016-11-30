@extends('layout.app')

@section('content')


<h1>Competições</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="{{route('competitions.create')}}">Nova competiçao</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
			<td>Inicio</td>
			<td>Término</td>
			<td>Opções</td>
		</tr>
	</tbody>
@foreach($competitions as $cpt)
	<tr>
		<td>{{$cpt -> name}}</td>
		<td>{{$cpt -> initial_date}}</td>
		<td>{{$cpt-> final_date}}</td>
		<td>
			<a href="{{route('competitions.show',$cpt->id)}}" class="btn btn-info">Visualizar</a>
			<a href="{{route('competitions.edit',$cpt->id)}}" class="btn btn-warning">Editar</a>
			<a href="{{url('competitions/delete',$cpt->id)}}" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
@endforeach
</table>


@endsection