<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/panel-user.css">
	<title>Controle de task</title>
</head>
<body>
 <nav class="navbar navbar-default">
 	<div class="container-fluid">
 		<div class="navbar-header">
 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
 				<span class="sr-only">Toggle Navigation</span>
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 				<span class="icon-bar"></span>
 			</button>
 			<a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo-mambo-inv.png" alt="" width="100" height="27"></a>
 		</div>

 		<div class="collapse navbar-collapse" id="navbar">
<!--  			<ul class="nav navbar-nav">
 				<li><a class="navbar-brand" href="{{ url('/') }}">Mambo</a></li>
 			</ul> -->

 			<ul class="nav navbar-nav navbar-right">
 				@if(auth()->guest())
 					@if(!Request::is('auth/login'))
 						<li><a href="{{ url('/login') }}">Login</a></li>
 					@endif
 					@if(!Request::is('auth/register'))
 						<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
 					@endif
 				@else
 					<li class="dropdown">
 						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
 						<ul class="dropdown-menu" role="menu">
 							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
 						</ul>
 					</li>
 				@endif
 			</ul>
 		</div>
 	</div>
 </nav>

 	<div class="container">
		@yield('conteudo')
	</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>