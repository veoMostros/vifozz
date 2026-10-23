<?php
 error_reporting(0);
 $key='inicio';
?>
<!doctype html>
<html lang="es" xml:lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>VIFOZZ - Visual Focus - Visual Stories</title>
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/carrusel.css">
<meta name="author" content="VM" />
<meta name="description" content="CADA RECUERDO DEBE TENER UNA GRAN FOTOGRAFÍA.">
<meta name="Keywords" content="">
<meta name="robots" content="all" />
<meta property="og:title" content="VIFOZZ" />
<meta property="og:description" content="CADA RECUERDO DEBE TENER UNA GRAN FOTOGRAFÍA." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://vifozz.com/" />
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
<script type="text/javascript" src="js/fullPage.js"></script>
<script type="text/javascript" src="js/efectos.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
	
//increase
var a = 0;
$(window).scroll(function() {

  var oTop = $('#vifografos').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 2700,
          easing: 'easeInCirc',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    a = 1;
  }
});
</script>
</head>

<body>
	
	<?php
	include_once"complements/header.php";
	?>
	
<div id="fullpage">
	
	<div class="section"><!-- inicio -->
		<div id="portaCarrusel">
			<main class="info fadeIn wow">
				<h1>CADA RECUERDO DEBE TENER UNA GRAN FOTOGRAFÍA</h1>
				<div class="caja">
					<a href="">
						<div class="logoBox">
							<span class="icon-vifozz colorGra"></span>
						</div>
						<div>
							<h4>DESCARGA</h4>
							<h4>LA APP</h4>
							<img src="imgs/logos/google_play.png" alt="">
						</div>
					</a>
				</div>
			</main>
			<div class="galeria owl-carousel">

				<div class="item">
					<div class="imagen">
						<div data-depth="0.3">
							<img class="parallax" data-depth="0.3" src="imgs/slider/vifozz_2.webp" alt="">
						</div>
					</div>
					<main class="texto">
						<h3>Bahía de Koyor / Montenegro</h3>
						<p>Vifógrafa</p>
						<p>Ana Mónica Jiménez</p>
					</main>
				</div>

				<div class="item">
					<div class="imagen">
						<div data-depth="0.3">
							<img class="parallax" data-depth="0.3" src="imgs/slider/vifozz_1.webp" alt="">
						</div>
					</div>
					<main class="texto">
						<h3>Bahía de Koyor / Montenegro</h3>
						<p>Vifógrafa</p>
						<p>Ana Mónica Jiménez</p>
					</main>
				</div>
				
				<div class="item">
					<div class="imagen">
						<div data-depth="0.3">
							<img class="parallax" data-depth="0.3" src="imgs/slider/vifozz_4.webp" alt="">
						</div>
					</div>
					<main class="texto">
						<h3>Bahía de Koyor / Montenegro</h3>
						<p>Vifógrafa</p>
						<p>Ana Mónica Jiménez</p>
					</main>
				</div>

			</div>
		</div>
		<main id="hero" class="ventana fadeInUp wow">
			<div class="texto">
				<img class="logo" src="imgs/vifozz_logo_morado.png" alt="" loading="lazy">
				<h2>LO CREAMOS <big>PARA TÍ</big></h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerción.</p>
			</div>
			<div class="imagen">
				<img class="parallax" data-depth="0.3" src="imgs/slider/vifozz_3.webp" alt="" loading="lazy">
			</div>
			<div class="nota">
				<p>Obten un 20% de descuento en tu primera sesión desde la app. Usa este codigo al finalizar tu compra: <b>VFZZ212</b></p>
			</div>
			<figure></figure>
		</main>
		<main id="cuadros" class="ventana fadeIn wow">
			<div class="cuadro fadeInUp wow">
				<img src="imgs/iconos/camara.png" alt="" loading="lazy">
				<h3>¿Cómo funciona?</h3>
				<p>Descubre en que consiste la app de vifozz y como es muy sencillo de usar.</p>
				<a href="" class="btn">Ver más <span class="icon-der"></span></a>
			</div>
			<div class="cuadro fadeInUp wow">
				<img src="imgs/iconos/galeria.png" alt="" loading="lazy">
				<h3>Nuestra galería</h3>
				<p>Descubre en que consiste la app de vifozz y como es muy sencillo de usar.</p>
				<a href="galeria.php" class="btn">Ver más <span class="icon-der"></span></a>
			</div>
			<div class="cuadro fadeInUp wow">
				<img src="imgs/iconos/vifografo.png" alt="" loading="lazy">
				<h3>Convertirme en vifógrafo</h3>
				<p>Descubre en que consiste la app de vifozz y como es muy sencillo de usar.</p>
				<a href="" class="btn">Ver más <span class="icon-der"></span></a>
			</div>
			<div class="cuadro fadeInUp wow">
				<img src="imgs/iconos/sesion.png" alt="" loading="lazy">
				<h3>!Quiero una sesión ahora¡</h3>
				<p>Descubre en que consiste la app de vifozz y como es muy sencillo de usar.</p>
				<a href="" class="btn">Ver más <span class="icon-der"></span></a>
			</div>
		</main>
	</div>
	
	<div class="section"><!-- destino -->
		<main class="boxesDes">
			<div>
				<div id="edos" class="ventana fadeInLeft wow">
					<span class="icon-mapa colorGra"></span>
					<h2>QUEREMOS ESTÁR <big>EN TODOS LADOS</big></h2>
					<p>Vifozz tiene una red de fotógrafos muy amplia en toda la república. Y cada segundo se están uniendo más fotógrafos para estar en cualquier lado que requiera capturar un momento en una foto.</p>
					<h3>ESTADOS CON COBERTURA VIFOZZ</h3>
					<ul class="edos">
						<li>Aguascalientes</li>
						<li>Baja California</li>
						<li>Baja California Sur</li>
						<li>Campeche</li>
						<li>Chiapas</li>
						<li>Chihuahua</li>
						<li>Ciudad de México</li>
						<li>Coahuila</li>
						<li>Colima</li>
						<li>Durango</li>
						<li>Estado de México</li>
						<li>Guanajuato</li>
						<li>Guerrero</li>
						<li>Hidalgo</li>
						<li>Jalisco</li>
						<li>Michoacán</li>
						<li>Morelos</li>
						<li>Nayarit</li>
						<li>Nuevo León</li>
						<li>Oaxaca</li>
						<li>Puebla</li>
						<li>Querétaro</li>
						<li>Quintana Roo</li>
						<li>San Luis Potosí</li>
						<li>Sinaloa</li>
						<li>Sonora</li>
						<li>Tabasco</li>
						<li>Tamaulipas</li>
						<li>Tlaxcala</li>
						<li>Veracruz</li>
						<li>Yucatán</li>
						<li>Zacatecas</li>
					</ul>
				</div>
				<div class="ventana fadeInUp wow">
					<div class="texto">
						<h2>DESCARGA TUS FOTOS DE FORMA INMEDIATA <span class="icon-descarga"></span></h2>
						<p>Sabemos que las quieres mostrar en el instante y a todo el mundo.</p>
					</div>
					<div class="fondo parallax" data-depth="0.3"> 
						<img src="imgs/elementos/descargar.png" alt="" loading="lazy">
					</div>
				</div>
			</div><!-- div-->
			<div>
				<div id="mapa" class="fadeIn wow">
					<div class="mexico fadeIn wow">
						<div id="points">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
							<img class="fadeInUp wow" src="imgs/point.png" alt="" loading="lazy">
						</div>
						<?php include_once"svg/mexico.svg"; ?>
					</div>
					<div id="vifografos" class="texto">
						<h3>MÁS DE <number class="counter-value pos" data-count="5000">1</number></h3>
						<p>VIFÓGRAFOS REGISTRADOS <big>EN TODO EL PAÍS.</big></p>
					</div>
				</div>
				<div class="ventana fadeInUp wow">
					<div class="texto">
						<h2>SESIONES RÁPIDAS Y CASUALES <span class="icon-reloj"></span></h2>
						<p>Lo más espontáneo y simple siempre se ve mejor</p>
					</div>
					<div class="fondo parallax" data-depth="0.3"> 
						<img src="imgs/elementos/espontaneo.png" alt="" loading="lazy">
					</div>
				</div>
			</div><!-- div-->
		</main>
	</div>
	
	<div id="banner" class="show wow">
		<main>
			<div class="fadeIn wow">
				<h3>SABEMOS QUE ERES</h3>
				<h2>UNA OBRA <big>DE ARTE</big></h2>
				<p>Y nuestro objetivo es encontrar al <em>artista</em> que sea capaz de capturar tu belleza en una foto.</p>
				<div class="portaBtns">
					<div class="logoBox">
						<span class="icon-vifozz colorGra"></span>
					</div>
					<a href=""><img src="imgs/logos/app_store.png" alt="" loading="lazy"></a>
					<a href=""><img src="imgs/logos/google_play.png" alt="" loading="lazy"></a>
				</div>
			</div>
		</main>
		<div class="portaFondo parallax" data-depth="0.3">
			<img src="imgs/fondo.png" alt="" loading="lazy">
		</div>
	</div>
	
	<div class="section"><!-- membresias -->
		<main class="tit">
			<h2 class="zoomIn wow">MEMBRESÍAS</h2>
		</main>
		<main class="membresias">
			<div class="ventana fadeInUp wow">
				<h3>SELF-SERVICE</h3>
				<h4>Selección simple de artistas</h4>
				<number class="precio"><span>$</span>12</number>
				<h3 class="nombre">MEMBRESÍA MENSUAL</h3>
				<a class="btn" href="">OBTENER AHORA</a>
				<p>Ideal para quienes quieren una sesión sencilla y sin complicaciones.</p>
				<h3 class="nombre">BENEFICIOS</h3>
				<ul>
					<li><b>Acceso a fotógrafos</b> cercanos a tu ubicación</li>
					<li><b>Reserva rápida y segura</b> desde la plataforma</li>
					<li><b>Perfiles verificados</b> con portafolio y reseñas</li>
					<li><b>Sesiones estándar</b> a precios accesibles</li>
				</ul>
			</div>
			<div class="ventana fadeInUp wow">
				<h3>POWER-SERVICE</h3>
				<h4>Selección simple de artistas</h4>
				<number class="precio"><span>$</span>22</number>
				<h3 class="nombre">MEMBRESÍA MENSUAL</h3>
				<a class="btn" href="">OBTENER AHORA</a>
				<p>Ideal para quienes quieren una sesión sencilla y sin complicaciones.</p>
				<h3 class="nombre">BENEFICIOS</h3>
				<ul>
					<li><b>Acceso a fotógrafos</b> cercanos a tu ubicación</li>
					<li><b>Reserva rápida y segura</b> desde la plataforma</li>
					<li><b>Perfiles verificados</b> con portafolio y reseñas</li>
					<li><b>Sesiones estándar</b> a precios accesibles</li>
				</ul>
			</div>
			<div class="ventana fadeInUp wow esp">
				<h3>PRO EXPERIENCE <span class="icon-estrella"></span></h3>
				<h4>Selección simple de artistas</h4>
				<number class="precio"><span>$</span>122</number>
				<h3 class="nombre">MEMBRESÍA MENSUAL</h3>
				<a class="btn" href="">OBTENER AHORA</a>
				<p>Ideal para quienes quieren una sesión sencilla y sin complicaciones.</p>
				<h3 class="nombre moradoClaro">BENEFICIOS</h3>
				<ul>
					<li><b>Acceso a fotógrafos</b> cercanos a tu ubicación</li>
					<li><b>Reserva rápida y segura</b> desde la plataforma</li>
					<li><b>Perfiles verificados</b> con portafolio y reseñas</li>
					<li><b>Sesiones estándar</b> a precios accesibles</li>
				</ul>
			</div>
		</main>
	</div>
	
	<div class="section"><!-- usar -->
		<main class="doble">
			<div class="ventana fadeInUp wow">
				<div class="texto">
					<h2>CÓMO USAR LA APP DE VIFOZZ <span class="icon-vifozz"></span></h2>
					<p>Te mostramos cómo aprovechar nuestra app al 100%</p>
				</div>
				<div class="fondo parallax" data-depth="0.3"> 
					<img src="imgs/elementos/app.png" alt="" loading="lazy">
				</div>
			</div>
			<div class="ventana fadeInUp wow">
				<div class="texto">
					<h2>VISITA NUESTRA GALERÍA <span class="icon-estrella"></span></h2>
					<p>Las mejores obras de arte de nuestros mejores talentos</p>
					<a class="btn" href="galeria.php">Ver Galería <span class="icon-der"></span></a>
				</div>
				<div class="fondo parallax" data-depth="0.3"> 
					<img src="imgs/elementos/galeria.png" alt="" loading="lazy">
				</div>
			</div>
		</main>
		<main class="tit">
			<h3 class="zoomIn wow">PREGUNTAS FRECUENTES</h3>
		</main>
		<main class="pregs fadeIn wow">
			<div>
				<h2>¿CÓMO SE REALIZA EL PAGO?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
			<div>
				<h2>¿CUÁNDO RECIBO MIS FOTOGRAFÍAS?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
			<div>
				<h2>¿QUÉ PASA SI NECESITO CANCELAR O REPROGRAMAR?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
			<div>
				<h2>¿LOS FOTÓGRAFOS SON PROFESIONALES VERIFICADOS?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
			<div>
				<h2>¿PUEDO SOLICITAR UN ESTILO O IDEA ESPECÍFICA?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
			<div>
				<h2>¿VIFOZZ ES SOLO PARA TURISTAS?</h2>
				<p>Donec sit amet placerat ipsum. Vestibulum ut consequat erat. Nulla euismod, lorem a bibendum tempor, odio leo lobortis orci, quis aliquam diam mauris in eros. Aliquam erat volutpat. Donec non hendrerit erat. Mauris velit magna, elementum et arcu vulputate, cursus pretium leo.</p>
			</div>
		</main>
	</div>
	
	<?php
	include_once"complements/footer.php";
	?>
	
</div>
	
<script>
const titulos = document.querySelectorAll('.pregs h2');

titulos.forEach(titulo => {
    titulo.addEventListener('click', () => {

        const actual = titulo.nextElementSibling;

        document.querySelectorAll('.pregs p').forEach(p => {
            if (p !== actual) {
                p.classList.remove('active');
            }
        });

        actual.classList.toggle('active');
    });
});
</script>
<script src="./js/owl.carousel.min.js"></script>
<script src="./js/carrusel.js"></script>
</body>
</html>