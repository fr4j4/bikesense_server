@extends('base')
@section('title','Registrar nuevo sensor')

@section('content')

<div class="container">
	<div class="well well-md col-md-8 col-md-push-2">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

	<form method="post">
		{{ csrf_field() }}

		<fieldset>

			<div class="form-group" >
				<label for="sensor_id" class="col-md-2">ID sensor</label>
				<div class="col-md-10">
					<input autofocus style="text-transform: uppercase;" type="text" class="form-control" name="sensor_id" required>
				</div>
			</div>
			<div class="form-group" style="margin-top: 3em !important">
				<label for="latitud" class="col-md-2">Latitud</label>

				<div class="col-md-4">
					<input type="number" required class="form-control" name="latitud">
				</div>

				<label for="longitud" required class="col-md-2">Longitud</label>
				<div class="col-md-4">
					<input type="number" class="form-control" name="longitud">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2">Direccion</label>
				<div class="col-md-10">
					<input type="text" name="direccion" class="form-control">	
				</div>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Registrar nuevo sensor</button>
			</div>


		</fieldset>

	</form>
	</div>
</div>
@endsection
<script type="text/javascript">
@section('ready')
@endsection
</script>