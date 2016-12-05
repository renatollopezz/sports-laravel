@extends('layout.app')
@section('content')
<h1>Nova competição</h1>
<div class="row">
	<div class="col-md-6">
		<form action="{{route('competitions.store')}}" method="POST" class="form-group">
			{{csrf_field()}}
			{{method_field('POST')}}
				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" class="form-control" name="name">
			    </div>

				 <div class="form-group">
			      <label for="">Data inicial:</label>
			      <input type="date" name="initial_date" class="form-control">
			    </div>

				 <div class="form-group">
			      <label for="">Data final:</label>
			      <input type="date" name="final_date" class="form-control">
			    </div>	
		<h3>Times participante</h3>
			    <div class="form-group">
			    	<table class="table container">
			    		<tbody>
			    				<tr>
			    					<td>Código</td>
			    					<td>Nome
			    					<td></td>
			    				</tr>
			    		</tbody>
			    
			    @foreach($teams as $team)
			    		<tr>
			    			<td>{{$team->id}}</td>
			    			<td>{{$team->name}}</td>
			    			<td ><input type="checkbox" value="{{$team->id}}" name="check[]"></td>
			    		</tr>
			    @endforeach
			    	</table>
			    </div>	
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="{{route('competitions.index')}}" class="btn btn-primary btn-md">Voltar</a>	
		</form>
	</div>
</div>

@endsection