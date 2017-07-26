<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Videos</title>
	<?php
        $LinksRoute='../';
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
                <h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Videos del Año </h2>
                <div class="row">
                    <!--======================================== Evento 1========================================-->
                    <?php
                    $selectItem = ejecutarSQL::consultar("SELECT * FROM videos WHERE YEAR(fecha)= YEAR(NOW()) ORDER BY orden ASC");
                    while ($fila = mysqli_fetch_array($selectItem)) {
                        ?>
                        <div class="col-xs-12 col-sm-8 col-md-6">
                            <div class="tile-gallery ">
                                <video controls >
                                    <source src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>" />
                                </video>

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
	<!--======================================== Pie de pagina ========================================-->
	<?php include './inc/footer.html';?>
</body>
</html>