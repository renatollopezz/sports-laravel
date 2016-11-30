
@extends('layout.app')

@section('content')
<h1>Nova partida</h1>
<div class="row">
	<div class="col-md-6">
		<form action="{{route('matches.store')}}" method="POST" class="form-group">
			{{csrf_field()}}
			{{method_field('POST')}}
				 <div class="form-group">
			      <label for="">Data da partida:</label>
			      <input type="date" class="form-control" name="dt_match">
			    </div>

				 <div class="form-group">
			      <label for="">Casa:</label>
			      <input type="number" name="nb_home_score" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Fora:</label>
			      <input type="number" name="nb_away_score" class="form-control">
			    </div>
				 
				 <div class="form-group">
			      <label for="">Time casa:</label>
			      	<select name="id_home" class="form-control">
						@foreach($teams as $team)
							<option value="{{$team->id}}"> {{$team->name}}</option>		
						 @endforeach	
		    		</select>
			    </div>

			    <div class="form-group">
			      <label for="">Time visitante:</label>
					<select  name="id_away" class="form-control">
						@foreach($teams as $team)
							<option value="{{$team->id}}"> {{$team->name}}</option>
						@endforeach
					</select>
			    </div>			
			
					<input type="submit" value="Confirmar" class="btn btn-success btn-md">
					<a href="{{route('matches.index')}}" class="btn btn-primary btn-md">Voltar</a>
			</div>

		</form>
	</div>
</div>
@endsection