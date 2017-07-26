
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
INICIO       
======================================-->

<div id="inicio" class="col-lg-12 col-md-10 col-sm-9 col-xs-12">
 
	<ul>
		<li class="botonesInicio">
		
			<a href="slide">
			<div style="background:#4CF53A">
			<span class="fa fa-toggle-right"></span>
			<p>Slide</p>
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			<a href="articulos">
			<div style="background:#F640DA">
			<span class="fa fa-file-text-o"></span>
			<p>Artículos</p>
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			<a href="galeria">
			<div style="background:#04E6DE">
			<span class="fa fa-image"></span>
			<p>Imágenes</p>
			</div>
			</a>

		</li>

		<li class="botonesInicio">
		
			<a href="videos">
			<div style="background:#1434AD"> 
			<span class="fa fa-film"></span>
			<p>Videos</p>
			</div>
			</a>

		</li>

	</ul>

</div>


<!--====  Fin de INICIO  ====-->
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
