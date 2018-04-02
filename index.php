<!DOCTYPE html>
<html>
<head>
	<title>Fox Designs</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Scripts -->
		<!-- font-awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Styles -->
		<!-- principal-style -->
		<link rel="stylesheet" type="text/css" href="./css/styles.css">
		<!-- montserrat-font(googleFonts) -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body>
	<div class="container">

		<!-- HEADER START -->
		<header>
			<div class="logo"><img src="./images/logo-foxdesigns.png"></div>
			<nav class="nav-options">
				<ul>
					<li class="hover-center"><a href="#">INICIO</a></li>
					<li class="hover-center"><a href="#about-us">NOSOTROS</a></li>
					<li class="hover-center"><a href="#services">SERVICIOS</a></li>
					<li class="hover-center"><a href="#contact">CONTACTO</a></li>
				</ul>
			</nav>
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="#">Nosotros</a>
				<a href="#">Servicios</a>
				<a href="#">Contacto</a>
			</div>
			<span onclick="openNav()"><i class="fas fa-bars"></i></span>
		</header>
		<!-- HEADER END -->

		<!-- BANNER START -->
		<div class="banner">
			<h1>Diseñadores web</h1>
			<h4>#creadoresdecontenido</h4>
			<a href="#contact"><button>Escribinos</button></a>
		</div>
		<!-- BANNER END -->
		<!-- ABOUT US -->
			<section id="aboutUs">
				<div class="present">
					<h2>SOBRE NOSOTROS</h2>	
					<div class="line"></div>
					<p>Somos un equipo altamente capacitado en varios sectores. Trabajamos en conjunto para llevar adelante proyectos con las mejores habilidades de cada uno.</p>
				</div>
				<div class="team">
					<h2>EQUIPO HUMANO</h2>
					<div class="line"></div>
					<div class="row">
						<div class="option">
							<h4><span><i class="fas fa-code"></i></span>Programador</h4>
							<p>Dedicados solamente a escribir codigo limpio y ordenado utilizando los mejores idiomas y herramientas en el mercado.</p>
						</div>
						<div class="option">
							<h4><span><i class="fas fa-puzzle-piece"></i></span>Maquetador</h4>
							<p>Se ocupan de armar la estructura de tu página de la forma mas efectiva y eficiente para tu negocio.</p>
						</div>
						<div class="option">
							<h4><span><i class="fas fa-paint-brush"></i></span>Diseñador</h4>
							<p>Actualizados con las tendencias del momento, se ocupan de elegir el mejor estilo. Hacen de un pedazo de código una obra de arte.</p>
						</div>
						<div class="option">
							<h4><span><i class="fas fa-chart-line"></i></span>Agente de marketing</h4>
							<p>Se ocupan de armar la campaña publicitaria que se adapte más a tu negocio y asi poder explotar sus fortalezas.</p>
						</div>
						<div class="option">
							<h4><span><i class="fas fa-comments"></i></span>Community manager</h4>
							<p>Los mejores a la hora del manejo de las redes sociales. Te ayudaran a conseguir un público masivo.</p>
						</div>
						<div class="option">
							<h4><span><i class="fas fa-camera"></i></span>Fotógrafo</h4>
							<p>Equipados con las mejores herramientas de fotografía y edición crean los mejores contenidos para tu negocio.</p>
						</div>
					</div>
				</div>
			</section>
		<!-- ABOUT US END -->
		<!-- SERVICIOS -->
			<!-- <section class="services">
				<div class="option">
					<div class="circle"><span></span></div>
					<h3></h3>
					<p></p>
				</div>
			</section> -->
		<!-- SERVICIOS END -->
	</div>

	<!-- Scripts JS -->
	<script src="./js/sidebar.js"></script>
</body>
</html>