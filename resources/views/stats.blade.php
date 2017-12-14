@extends('base')
@section('title','Estadísticas Bikesense')

@section('content')

<div style="text-align: center;" class="container">
	<div class="well col-md-8 col-md-push-2" >
		<legend>Estadísticas del sensor</legend>
		<div class="row">
			<div class="col">
				<canvas id="myChart" width="400" height="250"></canvas>
			</div>
			<div class="col">
				<canvas id="grafhoras" width="400" height="250"></canvas>
			</div>
		</div>
		
		
	</div>
</div>

<script type="text/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/stats.js')}}"></script>
@endsection

<script type="text/javascript">
@section('ready')

@endsection
</script>