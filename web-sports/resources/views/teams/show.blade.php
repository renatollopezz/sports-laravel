
@extends('layout.app')

@section('content')


<div class="jumbotron">
  <h1>Detalhes do time</h3>
 <h3>Time: {{$team->name}}</h3>
 <h3>Abreviação:{{$team->abreviation}}</h3>

  <p><a class="btn btn-primary btn-lg" href="{{route('teams.index')}}" role="button">Voltar
  </a></p>

</div>
@endsection