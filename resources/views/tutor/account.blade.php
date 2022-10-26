<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index</title>
		<!-- Bootstrap -->
		<script src="{{ asset('static/js/modernizr.custom.js')}}"></script>
		<link href="{{ asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('static/css/jquery.fancybox.css')}}" rel="stylesheet">
		<link href="{{ asset('static/css/flickity.css')}}" rel="stylesheet" >
		<link href="{{ asset('static/css/animate.css')}}" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type='text/css' href="{{ asset('static/css/styles.css')}}">
		<link rel="stylesheet" type='text/css' href="{{ asset('static/css/queries.css')}}">
	</head>
	<body>
		<header>
			<section class="hero3">
				
				<div class="container">
					<div class="row nav-wrapper">
						<div class="col-md-6 col-sm-6 col-xs-6 text-left">
							<a href="#"><img src="{{ asset('static/img/logo-white.png')}}" alt="Boxify Logo"></a>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right navicon">
							<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
						</div>
					</div>
					<br><br><br><br><br><br><br>
					<div class="row hero-content">
						<form method="post" action="">  
						<label>Nombre</label><input value="Alan Yair Pérez Mireles" class="string optional form-control" disabled="disabled">
						<label>Escuela</label><input value="Beatriz de la Fuente" class="string optional form-control" disabled="disabled">
						<label>Grupo</label><input value="5 B" class="string optional form-control" disabled="disabled">
						<label for="numero">Número de contacto</label>
                    	<input type="tel" name="numero" placeholder="(Código de área) Número" class="form-control" id="numero" required="required">
                    	<label for="numero_2">Número de contacto respaldo</label>
                    	<input type="tel" name="numero_2" placeholder="(Código de área) Número" class="form-control" id="numero_2" required="required">
                    	<br><br>
                    	<button type="submit" class="button button-style button-style-white button-style-color-3">Actualizar</button>
            			</form>
					</div>
				</div>
			</section>
		</header>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h1 class="footer-logo">
						<img src="{{ asset('static/img/logo-blue.png')}}" alt="Footer Logo Blue">
						</h1>
						<p>© Boxify 2015 - <a href="http://tympanus.net/codrops/licensing/">Licence</a> - Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Peter Finlan</a></p>
					</div>
					<div class="col-md-7">
						
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay overlay-boxify">
			<nav>
				<ul>
					<li><a href="#about"><i class="fa fa-credit-card"></i>Pagar</a></li>
					<li><a href="#features"><i class="fa fa-user"></i>Mis datos</a></li>
				</ul>
				<ul>
					<li><a href="#screenshots"><i class="fa fa-comment"></i>Mensajes</a></li>
					<li><a href="#download"><i class="fa fa-cutlery"></i>Menú</a></li>
				</ul>
			</nav>
		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="{{ asset('static/js/min/toucheffects-min.js')}}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="{{ asset('static/js/flickity.pkgd.min.js')}}"></script>
		<script src="{{ asset('static/js/jquery.fancybox.pack.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="{{ asset('static/js/retina.js')}}"></script>
		<script src="{{ asset('static/js/waypoints.min.js')}}"></script>
		<script src="{{ asset('static/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('static/js/min/scripts-min.js')}}"></script>
	</body>
</html>
