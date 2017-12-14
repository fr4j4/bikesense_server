<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
	
</head>
<body>
<nav class="navbar navbar-inverse">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">BikeSense Valdivia</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Lecturas</a></li>
        <li><a href="{{ url('/estadisticas') }}">Estadísticas</a></li>

      <li class="dropdown" style="cursor: pointer;">
        <a class="dropdown-toggle" data-toggle="dropdown">Administrar sensores
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('registrar_lector')}}">Registrar nuevo</a></li>
          <li><a href="#">Sensores registrados</a></li>
          <!---
            <li><a href="#"></a></li>
          -->
        </ul>
      </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
      	@if(!Auth::user())
        <li><a href="#" id="signup"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <li><a href="#" id="login" ><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>
      	@else
      	<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
      	@endif
      </ul>
    </div>
  </div>
</nav> 



@if(!Auth::user())
<div class="modal fade" id="modalLogin" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ingresar</h4>
            </div>

            <div class="modal-body">
                <form id="modalFormCliente" class="form-horizontal" method="post" novalidate="" action="{{route('login')}}">
                	{{ csrf_field() }}



                    <div class="form-group">
                        <label for="labnombre" class="col-sm-4 control-label" >Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="email" name="email"  value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="labnombre" class="col-sm-4 control-label" >Contraseña</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="pass"  value="" name="password" required>
                        </div>
                    </div>   
                </form>
            </div>

            <div class="modal-footer">
                <button type="submit" onclick="$('#modalFormCliente').submit()" class="btn btn-primary" id="login">Ingresar
                </button>
                <button type="button" class="btn btn-secondary" id="salirlogin" >Salir
                </button>
            </div>
        </div>
  </div> 
</div>
@else
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>
@endif

@yield('content')
<script type="text/javascript" src="{{asset('vendors/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/base.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<script type="text/javascript">
	$().ready(function(){
		@yield("ready")
	});
</script>

</body>
</html>