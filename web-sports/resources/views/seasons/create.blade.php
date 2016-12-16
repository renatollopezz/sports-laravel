@extends('layout.app')
@section('content')
<h1>Nova temporada</h1>
<div class="row">
	<div class="col-md-6">

	<div class="alert alert-danger">

	</div>
		<form action="{{route('seasons.store')}}" method="POST" class="form-group">
			{{csrf_field()}}
			{{method_field('POST')}}
				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" class="form-control" name="name">
			    </div>	
	
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="{{route('seasons.index')}}" class="btn btn-primary btn-md">Voltar</a>	
		</form>
	</div>
</div>

@endsection