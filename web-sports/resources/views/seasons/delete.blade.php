@extends('layout.app')
@section('content')
	<h1>Deseja excluir o registro?</h1>
<form action="{{route('seasons.destroy',$season->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<h1>Campeonato: {{$season->name}}</h1>
	<button type="submit" class="btn btn-danger btn-md">Confirmar</button>
	<a class="btn btn-primary btn-md" href="{{route('seasons.index')}}">Voltar</a>
</form>


@endsection