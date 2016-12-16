@extends('layout.app')

@section('content')


<h1>Temporadas</h1>

<div class="row">
	<div class="col-md-6">
		<a class="btn btn-primary" href="{{route('seasons.create')}}">Nova temporada</a>
	</div>
</div>
<table class="table container">
	<tbody>
		<tr>
			<td>Nome</td>
		</tr>
	</tbody>
@foreach($seasons as $s)
	<tr>
		<td>{{$s -> name}}</td>
		<td>
			<a href="{{route('seasons.show',$s->id)}}" class="btn btn-info">Visualizar</a>
			<a href="{{route('seasons.edit',$s->id)}}" class="btn btn-warning">Editar</a>
			<a href="{{url('seasons/delete',$s->id)}}" class="btn btn-danger">Excluir</a>
		</td>
	</tr>
@endforeach
</table>


@endsection