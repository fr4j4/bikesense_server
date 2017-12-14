@extends('base')
@section('title','Lecturas Bikesense')
@section('content')

	

<div style="text-align: center;" class="container">
	<div class="well col-md-8 col-md-push-2" >
		<legend>Lecturas realizadas {{$count}}</legend>
		{{ $lectures->links() }}
		<table class="table">
		<thead>
			<th style="text-align: center;">id_sensor</th>
			<th style="text-align: center;">fecha medición</th>
		</thead>
		@foreach($lectures as $l)
			<tr>
				<td>{{$l->client_id}}</td>
				<td>{{$l->created_at}}</td>
			</tr>
		@endforeach
		</table>
	</div>
</div>



@endsection