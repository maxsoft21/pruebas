<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artículos</title>
        <?php
        $LinksRoute = '../';
        include './inc/links.html';
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        ?>
    </head>
    <body>
        <!--======================================== Boton ir arriba ========================================-->
<?php include './inc/header.html'; ?>
        <section class="full-reset section-gallery-ins">
            <!--======================================== Eventos del 2013 ========================================-->
            <article class="container">
                <h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Articulos del Año </h2>
                <div class="row">
                    <!--======================================== Evento 1========================================-->
                    <?php
                    $selectItem = ejecutarSQL::consultar("SELECT * FROM articulos WHERE YEAR(fecha)= YEAR(NOW()) ORDER BY orden ASC");
                    while ($fila = mysqli_fetch_array($selectItem)) {
                        ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

					<img src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>" class="img-thumbnail">
					<h1><?=$fila['titulo'];?></h1>
					<p><?=$fila['introduccion'];?></p>
                                        <a href="#articulo<?=$fila["id"];?>" data-toggle="modal">
					<button class="btn btn-default">Leer Más</button>
					</a>

					<hr>

				</div>

				<div id="articulo<?=$fila['id'];?>" class="modal fade">
      
					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">
			            
			   				<button type="button" class="close" data-dismiss="modal">&times;</button>
			  		 		<h3 class="modal-title"><?=$fila['titulo'];?></h3>
			            
						</div>

						<div class="modal-body" style="border:1px solid #eee">
			            
			    			<img src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>" width="100%" style="margin-bottom:20px">
			    			<p class="parrafoContenido text-justify"><?=$fila['contenido'];?></p>
			            
						</div>

							<div class="modal-footer" style="border:1px solid #eee">
			            
			    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			            
							</div>

					</div>

				</div>
                        <?php
                    }
                    mysqli_free_result($selectItem);
                    ?>
                </div>
            </article>
            <div class="divider-general"></div>

        </section>
<?php include './inc/footer.html'; ?>
    </body>
</html>