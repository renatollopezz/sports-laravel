@extends('layout.app')
@section('content')
<h1>Edição da competição</h1>
<div class="row">
	<div class="col-md-6">
		<form action="{{route('competitions.update',$competition->id)}}" method="POST" class="form-group">
			{{csrf_field()}}
			{{method_field('PUT')}}
				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" value="{{$competition->name}}" class="form-control" name="name">
			    </div>

				 <div class="form-group">
			      <label for="">Data inicial:</label>
			      <input type="date" value="{{date('d/m/Y',strtotime($competition->initial_date))}}" name="initial_date" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Data final:</label>
			      <input type="date" value="{{
					date('d/m/Y',strtotime($competition->final_date))
				      }}" name="final_date" class="form-control">
			    </div>

			<h3>Times participantes</h3>
			    <div class="form-group">
			    	<table class="table container">
			    		<tbody>
			    				<tr>
			    					<td>Nome
			    					<td></td>
			    				</tr>
			    		</tbody>
			    
			    @foreach($teams as $team)
			    		<tr>
			    			<td>{{$team->name}}</td>
			    			@if(count($competition->teams->where('id',$team->id)) > 0)
			    				<td><input  type="checkbox" value="{{$team->id}}" checked="true" name="check[]"></td>
			    			@else
			    			    <td><input  type="checkbox" value="{{$team->id}}"  name="check[]"></td>
			    			 @endif
			    		</tr>
			    @endforeach
			    	</table>
			    </div>
		<div class="form-group">
			<h3>Temporada</h3>
			<select class="form-control" name="season_id" id="competition-season">
				 @foreach($seasons as $season)
					<option value="{{$season->id}}">{{$season->name}}</option>
				 @endforeach
			</select>
		</div>
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="{{route('competitions.index')}}" class="btn btn-primary btn-md">Voltar</a>
			</div>
		</form>
	</div>
</div>
@endsection