
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
VIDEOS ADMINISTRABLE          
======================================-->

<div id="videos" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

<form method="post" enctype="multipart/form-data">

	<input type="file" id="subirVideo" name="video" class="btn btn-default" required>

</form>

<p>Subir sólo videos en formato MP4 y que no exceda el peso de 50 MB</p>

<ul id="galeriaVideo">

	<?php

		$video = new GestorVideos();
		$video -> mostrarVideoVistaController();

	?>
	
</ul>


	<button id="ordenarVideo" class="btn btn-warning" style="margin:10px 30px;">Ordenar Videos</button>

	<button id="guardarVideo" class="btn btn-primary" style="margin:10px 30px; display:none">Guardar Orden Videos</button>


</div>


<!--====  Fin de VIDEOS ADMINISTRABLE  ====-->

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
