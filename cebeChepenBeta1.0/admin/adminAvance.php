<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Avances</title>
        <?php
        session_start();
        $LinksRoute = "../";
        include '../inc/links.php';
        ?>
        <script src="../js/SendForm.js"></script>
        <script>
            $(document).ready(function () {
                $(function () {
                    $("div.holder").jPages({
                        containerID: "itemContainer",
                        perPage: 20
                    });
                });
                /* $('.list-catalog-container li').click(function(){
                 window.location="adminAvance.php?StudentS="+$(this).attr("data-code-section");
                 });*/

            });


        </script>
    </head>
    <body>
        <?php
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        //include '../process/SecurityAdmin.php';
        include 'process/SecurityUser.php';
        include '../inc/NavLateral.php';
        ?>
        <div class="content-page-container full-reset custom-scroll-containers">
            <?php
            include '../inc/NavUserInfo.php';
            ?>
            <div class="container">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>- Administración de Avances</small></h1>
                </div>
            </div>
            <div class="container-fluid"  style="margin: 50px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="../assets/img/section.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        Bienvenido a la sección para registrar nuevos avances de alumnos al sistema, debes de seleccionar los datos e ingresar la observación correspondiente en el siguiente formulario para registrar un avance
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 lead">
                        <ol class="breadcrumb">
                            <li class="active">Nuevo Avance</li>
                            <li><a href="../catalogAvances.php">Listado de Avances</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="margin: 0 0 50px 0;">
                <!-- <form class="pull-right" style="width: 30% !important;" action="adminAvance.php" method="get" autocomplete="off">
                <div class="group-material">
                    <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar estudiante" name="StudentN" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                    <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                        <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                    </button>
                </div>
            </form>-->
                <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Secciones</h2>
                <ul class="list-unstyled text-center list-catalog-container">
                    <?php
                    $selectSections = ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion!=1 ORDER BY Nombre ASC");
                    while ($fila = mysqli_fetch_array($selectSections)) {
                        ?>
                        <button class="btn btn-success btn-list" data-code="<?= $fila['CodigoSeccion']; ?>" data-url="../process/ListDataAlumno.php"><i class="zmdi zmdi-refresh"></i> <?= $fila['Nombre']; ?></button> 
                        <?php
                    }
                    mysqli_free_result($selectSections);
                    ?>
                </ul>
            </div>
            <div class="full-reset representative-resul"></div>

            <div class="msjFormSend"></div>

            <div class="modal fade" id="ModalList" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <form class="form_SRCB modal-content" action="" method="post"   autocomplete="off">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">Seleccionar Alumno</h4>
                        </div>

                        <div class="modal-body" id="ModalData">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelar">Cancelar</button>
                            <!--<button type="submit" class="btn btn-success"><i class="zmdi zmdi-refresh"></i> &nbsp;&nbsp; Guardar cambios</button>
                            --></div>
                    </form>
                </div>
            </div>


            <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                        </div>
                        <div class="modal-body">
                            <?php include '../help/help-adminsection.php'; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php include '../inc/footer.php'; ?>
        </div>
    </body>
</html>