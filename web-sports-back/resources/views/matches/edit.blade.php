@extends('layout.app')
@section('content')

<h1>Edição da partida</h1>

<div class="row">
	<div class="col-md-6">
		<form action="{{route('matches.update',$matches->id)}}" method="POST" class="form-group">
	{{csrf_field()}}
	{{method_field('PUT')}}
				 <div class="form-group">
			      <label for="">Data da partida:</label>
			      <input type="date" value="{{$matches->dt_match}}" class="form-control" name="dt_match">
			    </div>
				
				 <div class="form-group">
			      <label for="">Casa:</label>
			      <input type="number" value="{{$matches->nb_home_score}}" name="nb_home_score" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Fora:</label>
			      <input type="number" value="{{$matches->nb_away_score}}" name="nb_away_score" class="form-control">
			    </div>
				 
				 <div class="form-group">
			      <label for="">Time casa:</label>
			      	<select name="id_home" class="form-control">
							<option value="{{$matches->home->id}}"> {{$matches->home->name}}</option>	
		    		</select>
			    </div>

			    <div class="form-group">
			      <label for="">Time visitante:</label>
					<select  name="id_away" class="form-control">
						<option value="{{$matches->away->id}}"> {{$matches->away->name}}</option>
					</select>
			    </div>	
			<button type="submit" class=" btn btn-md btn-success" >Salvar</button>
			<a href="{{route('matches.index')}}" class="btn btn-primary btn-md">Voltar</a>

		</form>
	</div>
</div>
@endsection