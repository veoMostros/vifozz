	<header>
		<div class="inter">
			<div>
				<a href="./."><img src="imgs/vifozz_logo.png" alt="VIFOZZ, visual focus, visual stories"></a>
			</div>
			<div class="menu">
				<a href="<?php if($key!='inicio'){ echo './'; } ?>#destino" data-menuanchor="destino">DESTINO</a>
				<a href="<?php if($key!='inicio'){ echo './'; } ?>#membresias"  data-menuanchor="membresias">MEMBRESÍAS</a>
				<a href="<?php if($key!='inicio'){ echo './'; } ?>#usar"  data-menuanchor="usar">CÓMO USAR VIFOZZ</a>
				<a <?php if($key=='galeria'){ echo 'class="active"'; } ?> href="galeria.php" >GALERÍA</a>
				<button class="btn-menu"><span></span></button>
			</div>
			<div class="convertir">
				<a <?php if($key=='artista'){ echo 'class="active"'; } ?> href="artista.php">Convertirte <small>en parte de vifozz</small> <span class="icon-estrella"></span></a>
			</div>
		</div>
	</header>
	
	<div id="openmenu">
		<div class="menu">
			<a <?php if($key=='inicio') echo 'class="active"'; ?> href="./.">INICIO</a>
			<a href="<?php if($key!='inicio'){ echo './'; } ?>#destino" data-menuanchor="destino">DESTINO</a>
			<a href="<?php if($key!='inicio'){ echo './'; } ?>#membresias"  data-menuanchor="membresias">MEMBRESÍAS</a>
			<a href="<?php if($key!='inicio'){ echo './'; } ?>#usar"  data-menuanchor="usar">CÓMO USAR VIFOZZ</a>
			<a <?php if($key=='galeria'){ echo 'class="active"'; } ?> href="galeria.php" >GALERÍA</a>
		</div>
		<div>
			<a href="english">ENGLISH</a>
		</div>
	</div>

	<div id="cortina"></div>

	<link itemprop="thumbnailUrl" href="https://vifozz.com/imgs/imagen.png">
	<span itemprop="thumbnail" itemscope itemtype="https://schema.org/ImageObject">
		<link itemprop="url" href="https://vifozz.com/imgs/imagen.png">
	</span>

	<main id="portaWhats">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=52"><span class="icon-whatsapp"></span></a>
	</main>