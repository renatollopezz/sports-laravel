@extends('layout.app')
@section('content')

<div class="jumbotron">
  <h1>Detalhes da partida</h3>
<h3>Data do jogo: 
	<p><h4>{{$matches->dt_match}}</h4></p>
</h1>

<h3>Placar do Jogo:
	<h4>{{$matches->home->name}} {{$matches->nb_home_score}}  X {{$matches->nb_away_score}} {{$matches->away->name}} </h4>
</h3>
  <p><a class="btn btn-primary btn-lg" href="{{route('matches.index')}}" role="button">Voltar</a></p>

</div>
@endsection