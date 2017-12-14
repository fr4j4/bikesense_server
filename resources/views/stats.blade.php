@extends('base')
@section('title','Estadísticas Bikesense')

@section('content')

<div style="text-align: center;" class="container">
	<div class="well col-md-8 col-md-push-2" >
		<legend>Porcentajes de medidas por día</legend>
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
<script type="text/javascript">
	var sensores=[];
	var cuentadias=[0,0,0,0,0,0,0]
	cuentadias[0]={{$cuenta_dias[0]->med}}
	cuentadias[1]={{$cuenta_dias[1]->med}}
	cuentadias[2]={{$cuenta_dias[2]->med}}
	cuentadias[3]={{$cuenta_dias[3]->med}}
	cuentadias[4]={{$cuenta_dias[4]->med}}
	cuentadias[5]={{$cuenta_dias[5]->med}}
	cuentadias[6]={{$cuenta_dias[6]->med}}
	
</script>
<script type="text/javascript" src="{{asset('js/chart.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/stats.js')}}"></script>
@endsection

<script type="text/javascript">
@section('ready')

@endsection
</script>