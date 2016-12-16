@extends('layout.app')

@section('content')
<h1>Deseja excluir ?</h1>

<form action="{{route('teams.destroy',$team->id)}}" method="POST">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<button type="submit" class="btn btn-danger">Confirmar</button>
	<a class="btn btn-default" href="{{route('teams.index')}}">Cancelar</a>
</form>
@endsection