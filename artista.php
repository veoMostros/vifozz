<?php
 error_reporting(0);
 $key='artista';
?>
<!doctype html>
<html lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>VIFOZZ ◦ Artista</title>
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/noindex.css">
<meta name="author" content="VM" />
<meta name="description" content="CADA RECUERDO DEBE TENER UNA GRAN FOTOGRAFÍA.">
<meta name="Keywords" content="">
<meta name="robots" content="all" />
<meta property="og:title" content="VIFOZZ" />
<meta property="og:description" content="CADA RECUERDO DEBE TENER UNA GRAN FOTOGRAFÍA." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://vifozz.com/artista.php" />
<meta property="og:image" content="https://vifozz.com/imgs/imagen.png" />
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:site_name" content="VIFOZZ" />
<link rel="apple-touch-icon" sizes="180x180" href="imgs/favicon/favicon_180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon/favicon_32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon/favicon_16x16.png">
<meta name="msapplication-TileColor" content="#7029ff">
<meta name="theme-color" content="#7029ff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/efectos_noindex.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
</head>

<body>
	
	<?php
	include_once"complements/header.php";
	?>
	
<div id="fullpage">
	
	<div class="intro">
		<main id="frase" class="texto">
			<h3 class="fadeIn wow">EL ARTISTA DETRÁS DE</h3>
			<h3 class="fadeIn wow">LA MAGIA DE <img src="imgs/vifozz_logo_blanco.png" alt=""></h3>
			<h3 class="fadeIn wow">ERES TÚ.</h3>
		</main>
		<div class="fondo">
			<img class="parallax" data-depth="0.3" src="imgs/fondo_artista.png" alt="">
		</div>
	</div>
	<main class="barra">
		<img class="icono zoomIn wow" src="imgs/iconos/vifografo.png" alt="">
		<h2 class="fadeIn wow">CONVIÉRTETE EN UN FOTÓGRAFO VIFOZZ</h2>
		<p class="fadeIn wow">Forma parte de una red de fotógrafos certificados y comienza a recibir solicitudes reales de personas que necesitan capturar sus mejores momentos.</p>
	</main>
	<main id="porque" class="ventana fadeInUp wow">
		<div class="texto">
			<h2>¿Por qué ser un <big>VIFÓGRAFO?</big></h2>
			<ul>
				<li>
					<h3>Trabaja bajo tu propio estilo</h3>
					<p>Tú decides cuándo y dónde aceptar sesiones.</p>
				</li>
				<li>
					<h3>Respaldo de una plataforma profesional</h3>
					<p>VIFOZZ valida tu trabajo y te conecta con clientes reales.</p>
				</li>
				<li>
					<h3>Capacitación incluida</h3>
					<p>Accede a contenido exclusivo para asegurar un estándar profesional.</p>
				</li>
				<li>
					<h3>Ganancias rápidas</h3>
					<p>Obten ingresos por sesiones sin moverte de tu localidad.</p>
				</li>
			</ul>
		</div>
		<div class="fondo">
			<img class="parallax" data-depth="0.3" src="imgs/slider/vifozz_5.webp" alt="" loading="lazy">
		</div>
		<?php include_once"svg/ele.svg"; ?>
	</main>
	<main id="pasos" class="ventana fadeIn wow">
		<div class="paso fadeInUp wow">
			<h3>PASO 1</h3>
			<div>
				<img src="imgs/iconos/registro.png" alt="" loading="lazy">
			</div>
			<h4>REGISTRO</h4>
			<p>Completa tu solicitud para iniciar el proceso como fotógrafo VIFOZZ.</p>
		</div>
		<div class="paso fadeInUp wow">
			<h3>PASO 2</h3>
			<div>
				<img src="imgs/iconos/capacitacion.png" alt="" loading="lazy">
			</div>
			<h4>CAPACITACIÓN</h4>
			<p>Accede a una serie de videos formativos diseñados para alinear tu trabajo al estándar VIFOZZ.</p>
		</div>
		<div class="paso fadeInUp wow">
			<h3>PASO 3</h3>
			<div>
				<img src="imgs/iconos/evaluacion.png" alt="" loading="lazy">
			</div>
			<h4>EVALUACIÓN</h4>
			<p>Realiza un examen final para validar tus conocimientos y habilidades.</p>
		</div>
		<div class="paso fadeInUp wow">
			<h3>PASO 4</h3>
			<div>
				<img src="imgs/iconos/certificado.png" alt="" loading="lazy">
			</div>
			<h4>CERTIFICACIÓN</h4>
			<p>Al aprobar, recibirás tu certificado y un código de acceso para operar como fotógrafo aprobado en la app.</p>
		</div>
	</main>
	<main id="registro" class="ventana fadeInLeft wow">
		<form action="">
			<h3>REGISTRO PARA FOTÓGRAFOS</h3>
			<h4>Este registro es el primer paso para formar parte de VIFOZZ.</h4>
			<p>Una vez enviado, recibirás acceso a la plataforma de capacitación.</p>
			<div class="bar">
				<div>
					<label for="nombre">Nombre completo</label>
					<input type="text" id="nombre" name="nombre">
				</div>
				<div class="tercio">
					<label for="fecha_nac">Fecha de nacimiento</label>
					<input type="text" id="fecha_nac" name="fecha_nac">
				</div>
			</div>
			<div class="bar">
				<div>
					<label for="correo">Correo electrónico</label>
					<input type="email" id="correo" name="correo">
				</div>
				<div>
					<label for="pais">País</label>
					<input type="text" id="pais" name="pais">
				</div>
				<div>
					<label for="ciudad">Ciudad</label>
					<input type="text" id="ciudad" name="ciudad">
				</div>
			</div>
			<div class="bar">
				<div>
					<label for="tipo">Tipo de fotografías <span>que realizas</span></label>
					<select id="tipo" name="tipo">
						<option>Artística</option>
						<option>Retrato</option>
					</select>
				</div>
				<div class="tercio">
					<label for="experiencia">Años de experiencia</label>
					<input class="onlyNumber" type="tel" id="experiencia" name="experiencia">
				</div>
			</div>
			<div class="bar">
				<div>
					<label for="portafolio">Link a portafolio / Instagram</label>
					<input type="text" id="portafolio" name="portafolio">
				</div>
			</div>
			<div class="confirmo">
				<div>
					<label>
						<input type="checkbox" name="acepto" class="option-input checkbox" value="true" autocomplete="off" />
						<span>Acepto formar parte del proceso de certificación VIFOZZ</span>
					</label>
				</div>
			</div>
			<div class="send">
				<button class="btn" type="submit">Iniciar proceso</button>
			</div>
		</form>
		<div id="ornamentos">
			<?php
			include"svg/orna.svg";
			include"svg/orna.svg";
			include"svg/orna.svg";
			include"svg/orna.svg";
			?>
		</div>
	</main>
	
	<?php
	include_once"complements/footer.php";
	?>
	
</div>
	
</body>
</html>