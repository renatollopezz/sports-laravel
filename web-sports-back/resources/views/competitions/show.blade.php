@extends('layout.app')
@section('content')

<div class="jumbotron">
  <h1>Detalhes da competição</h3>
<h3>Nome: 
	<p><h4>{{$competition->name}}</h4></p>
</h1>

<h3>Data inicial:
	<h4>{{$competition->initial_date}}</h4>
</h3>

<h3>Data final:
	<h4>{{$competition->final_date}}</h4>
</h3>
  <p><a class="btn btn-primary btn-lg" href="{{route('competitions.index')}}" role="button">Voltar</a></p>

</div>

@endsection