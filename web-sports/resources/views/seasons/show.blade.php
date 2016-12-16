@extends('layout.app')
@section('content')

<div class="jumbotron">
  <h1>Detalhes da Temporada</h3>
<h3>Nome: 
	<p><h4>{{$season->name}}</h4></p>
</h1>
  <p><a class="btn btn-primary btn-lg" href="{{route('seasons.index')}}" role="button">Voltar</a></p>

</div>

@endsection