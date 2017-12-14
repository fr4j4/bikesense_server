$(function () {
	$('#login').click(function (e) {
		$('#modalLogin').modal('show');
	});
	$('#salirlogin').click(function(e){
		$('#modalLogin').modal('hide');
	});
});