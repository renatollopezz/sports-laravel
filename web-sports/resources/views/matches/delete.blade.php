@extends('layout.app')
@section('content')
<h1>Deseja realmente excluir a partida?</h1>
<form action="{{route('matches.destroy',$matches->id)}}" method="POST" class="form-group">
	{{csrf_field()}}
	{{method_field('DELETE')}}
	<button href="submit" class="btn btn-danger" >Confirmar</button>	
	<a href="{{route('matches.index')}}" class="btn btn-primary">Cancelar</a>
</form>
@endsection