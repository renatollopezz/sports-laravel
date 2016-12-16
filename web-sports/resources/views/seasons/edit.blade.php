@extends('layout.app')
@section('content')
<h1>Edição da competição</h1>
<div class="row">
	<div class="col-md-6">
		<form action="{{route('seasons.update',$season->id)}}" method="POST" class="form-group">
			{{csrf_field()}}
			{{method_field('PUT')}}
				 <div class="form-group">
			      <label for="">Nome:</label>
			      <input type="text" value="{{$season->name}}" class="form-control" name="name">
			    </div>
				<input type="submit" value="Confirmar" class="btn btn-success btn-md">
				<a href="{{route('seasons.index')}}" class="btn btn-primary btn-md">Voltar</a>
			</div>
		</form>
	</div>
</div>
@endsection