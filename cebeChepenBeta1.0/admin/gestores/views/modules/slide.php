
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php
        session_start();
        $LinksRoute='../../';
        include '../../inc/links.php'; 
    ?>
</head>
<body>
    <?php 
        include '../../library/configServer.php';
        include '../../library/consulSQL.php';
        if ($_SESSION['UserPrivilege']=='Admin') {
    
        }  else {
            header("Location: process/logout.php");
            exit();
        }
        include '../../inc/NavLateral.php';
    ?>
    <div class="content-page-container full-reset custom-scroll-containers">
        <?php 
            include '../../inc/NavUserInfo.php';
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema cebe chepén <small>- Gestores</small></h1>
            </div>
        </div>

        <section class="container text-center " style="padding: 40px 0;margin-left: 10%;">
         <!--=====================================

<!--=====================================
SLIDE ADMINISTRABLE          
======================================-->

<div id="imgSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>

<p><span class="fa fa-arrow-down"></span>  Arrastra aquí tu imagen (tamaño recomendado: 1600px * 600px y peso recomendado: 2MB)</p>
	
	<ul id="columnasSlide">

	<?php

	$slide = new GestorSlide();
	$slide -> mostrarImagenVistaController();

	?>
		
	</ul>

	<button id="ordenarSlide" class="btn btn-warning pull-right" style="margin:10px 30px">Ordenar Slides</button>

	<button id="guardarSlide" class="btn btn-primary pull-right" style="display:none; margin:10px 30px">Guardar Orden Slides</button>

</div>

<!--===============================================-->

<div id="textoSlide" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<hr>
	
	<ul id="ordenarTextSlide">

	<?php

	$slide = new GestorSlide();
	$slide -> editorSlideController();

	?>

	</ul>
</div>

<!--====  Fin de SLIDE  ====-->
        </section>
       
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    <?php include './help/help-home.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <?php include '../../inc/footer.php'; ?>
    </div>
    
</body>
</html>
