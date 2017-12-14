@extends('base')
@section('title','Estadísticas Bikesense')
<script type="text/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/stats.js')}}"></script>
@section('content')

<div style="text-align: center;" class="container">
	<div class="well col-md-8 col-md-push-2" >
		<legend>Estadísticas del sensor</legend>
		<canvas id="myChart" width="400" height="250"></canvas>
		
	</div>
</div>

@endsection

<script type="text/javascript">
@section('ready')
	alert('stats')
@endsection
</script>