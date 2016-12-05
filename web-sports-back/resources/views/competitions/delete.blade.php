@extends('layout.app')
@section('content')
	<h1>Deseja excluir o registro?</h1>
<form action="{{route('competitions.destroy',$competition->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<h1>Campeonato: {{$competition->name}}</h1>
	<button type="submit" class="btn btn-danger btn-md">Confirmar</button>
	<a class="btn btn-primary btn-md" href="{{route('competitions.index')}}">Voltar</a>
</form>


@endsection