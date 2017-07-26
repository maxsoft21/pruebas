<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institución</title>
	<?php 
        $LinksRoute='./';
        include './frotend/inc/links.html';?>
        
</head>
 
<body>
	<!--======================================== Boton ir arriba ========================================-->
	<?php include './frotend/inc/header.html';?>
	<!--======================================== Logo & Lema ========================================-->
	<section class="full-reset font-cover" style="background-image: url(assets/img/foto.jpg);background-size: 100% 100%">
		<div class="full-reset" style="height: 100%;  background-color: rgba(255,255,255,.6); padding: 60px 0;">
			<h1 class="text-center titles">Aplicación web y la facilidad del aprendizaje de niños con Síndrome de Down</h1>
                        <figure class="Logo-Ins-Index">
                            <img src="assets/img/insignia.jpg" alt="Logo" class="img-responsive">
			</figure>
			<p class="lead text-center">
				"Juega, diviértete y disfruta de la vida porque todo triunfo comienza con el deseo de hacer nuestro mejor esfuerzo."
			</p>
		</div>
	</section>
        <?php
        include './library/configServer.php';
        include './library/consulSQL.php';
        ?>
	<div class="divider-general"></div>
	<!--======================================== Video corto & carrusel========================================-->
	<section class="full-reset" style="background-color: rgb(242, 242, 242); padding: 40px 0;">
		<div class="container">
			<h2 class="text-center titles">Instalaciones de la institución</h2>
			<br><br>
			<!--======================================== Carrusel ========================================-->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-push-6">
					<h3 class="text-center titles">Fotos Instalaciones</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repudiandae cumque dolorum mollitia tempora odit quam, rerum pariatur ipsa unde, delectus laborum aliquid voluptates, nihil sed iste minima quod doloribus.
					<a href="http://ins-sensunte.net/imagenes/espacio_ins/Flash01/index.html" class="open-link-newTab">Has click aqui para ver las fotos</a>
					</p>
					<i class="fa fa-picture-o icon-index hidden-xs hidden-sm"></i>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-pull-6">
					<div id="slider-ins" class="carousel slide" data-ride="carousel">
					  <!-- Indicadores -->
					  <ol class="carousel-indicators">
					    <li data-target="#slider-ins" data-slide-to="0" class="active"></li>
					    <li data-target="#slider-ins" data-slide-to="1"></li>
					    <li data-target="#slider-ins" data-slide-to="2"></li>
					  </ol>
					  <!-- Imagenes -->
					  <div class="carousel-inner" role="listbox">
                                              <?php
                                          $selectSliders=ejecutarSQL::consultar("SELECT * FROM slide");
                                          ?>
                                               <?php
                                              $ruta=array();
                                              $title=array();
                                              $descripcion=array();
                                              $i=0;
                                              while($dataSlide=mysqli_fetch_array($selectSliders)){
                                              $ruta[$i]=  'admin/gestores/'.str_replace('../', '', $dataSlide['ruta']);
                                              $title[$i]=$dataSlide['titulo'];
                                              $descripcion[$i]=$dataSlide['descripcion'];
                                                 $i++;
                                              }
                                           
                                              ?>
						<!-- Primera imagen -->                                                
					    <div class="item active">
                                                <img src="<?=$ruta[0]?>" alt="Default">
					      <div class="carousel-caption">
					        <h3><?=$title[0]?></h3>
                                                  <p><?=$descripcion[0]?></p>
					      </div>
                                             
					    </div>
                                                <?php
                                            for($j=1;$j<count($ruta);$j++){
                                                ?>
						<!-- Segunda imagen -->
					    <div class="item">
					      <img src="<?=$ruta[$j];?>" alt="Default">
					      <div class="carousel-caption">
                                                  <h3><?=$title[$j]?></h3>
                                                  <p><?=$descripcion[$j]?></p>
					      </div>
					    </div>
                                                <?php
                                                }
                                                ?>
					  </div>
					  <!-- Controles -->
					  <a class="left carousel-control" href="#slider-ins" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#slider-ins" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<br>
			<div class="divider-general"></div>
			<br>
			<!--======================================== Video ========================================-->
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<h3 class="text-center titles">Video Instalaciones</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias repudiandae cumque dolorum mollitia tempora odit quam, rerum pariatur ipsa unde, delectus laborum aliquid voluptates, nihil sed iste minima quod doloribus.</p>
					<i class="fa fa-film icon-index hidden-xs hidden-sm"></i>
				</div>
				<div class="col-xs-12 col-sm-6" >
					<video controls >
                                            <source src="assets/video/fonomimicacebe.mp4" type="video/mp4" >
					</video>
                                       <!-- <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fcebechepen.chepen%2Fvideos%2F295852740746255%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
				</div>-->
			</div>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Acontecer institucional ========================================-->
	<section class="events-ins">
		<div class="container-fluid">
			<h2 class="text-center titles">ACONTECER INSTITUCIONAL</h2>
			<br><br>
			<div class="row">
				<!--======================================== Articulo 1 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/default.png" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Lorem ipsum dolor sit amet</h3>
				        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam, incidunt, sapiente id quibusdam voluptatem.</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 2 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/default.png" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Lorem ipsum dolor sit amet</h3>
				        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam, incidunt, sapiente id quibusdam voluptatem.</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
				<!--======================================== Articulo 3 ========================================-->
				<article class="col-xs-12 col-sm-6 col-md-4">
					<div class="thumbnail">
				      <img src="assets/gallery/default.png" alt="IMG" class="img-responsive img-rounded">
				      <div class="caption">
				        <h3 class="text-center">Lorem ipsum dolor sit amet</h3>
				        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis quam, incidunt, sapiente id quibusdam voluptatem.</p>
				        <p class="text-center"><a href="#" class="btn btn-primary" role="button">Ver imágenes</a></p>
				      </div>
				    </div>
				</article>
			</div>
		</div>
	</section>
	<div class="divider-general"></div>
	<!--======================================== Enlaces importantes ========================================-->
	<section class="text-center important-links-index">
		<h2 class="titles">Sitios y enlaces importantes</h2>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-graduation-cap"></i>
			<p>MOODLE</p>
		</a>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-paw"></i>
			<p>ARA-MACAO</p>
		</a>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-globe"></i>
			<p>JOVENES A.T.T</p>
		</a>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-star-o"></i>
			<p>Promo. INS</p>
		</a>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-file-text-o"></i>
			<p>Cons.conducta</p>
		</a>
		<a href="#!" class="open-link-newTab">
			<i class="fa fa-download"></i>
			<p>Descargas</p>
		</a>
	</section>
	<!--======================================== Pie de pagina ========================================-->
	
            <?php include './frotend/inc/footer.html';?>
      
</body>
</html>