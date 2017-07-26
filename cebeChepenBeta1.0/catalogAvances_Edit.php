
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Estudiantes</title>
        <?php
        session_start();
        $LinksRoute = "./";
        include './inc/links.php';
        ?>
        <script type="text/javascript" src="js/jPages.js"></script>
        <script src="js/SendForm.js"></script>
        <script>
            $(document).ready(function () {
                $(function () {
                    $("div.holder").jPages({
                        containerID: "itemContainer",
                        perPage: 20
                    });
                });
                /* $('.list-catalog-container li').click(function () {
                 window.location = "catalogAvances.php?StudentS=" + $(this).attr("data-code-section");
                 });*/
        
            });
   
        </script>
    </head>
    <body>
        <?php
        include 'library/configServer.php';
        include 'library/consulSQL.php';
        include 'process/SecurityUser.php';
        include 'inc/NavLateral.php';
        ?>
        <div class="content-page-container full-reset custom-scroll-containers">
            <?php
            include './inc/NavUserInfo.php';
            ?>
            <div class="container">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>- Administración de Avances</small></h1>
                </div>
            </div>
            <div class="container-fluid"  style="margin: 50px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="./assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución, podrás buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos del estudiante.<br>
                        <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 lead">
                        <ol class="breadcrumb">
                            <li class="active"><a href="admin/adminAvance.php">Nuevo Avance</a></li>
                            <li class="active"><a href="catalogAvances.php">Listado de Avances</a></li>
                            <li >Actualización de Avances</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container-fluid" id="AgregarNuevoAvance">
                <?php
                $dni = consultasSQL::CleanStringText($_POST['dni']);
                $idUsuario = $_SESSION['primaryKey'];
                $tipoAvance = $_POST['tipoAvance'];
                $selectAvance = ejecutarSQL::consultar("SELECT * FROM avance a inner join datospersonales dp on dp.dni=a.dni WHERE a.dni ='" . $dni . "' and substring(fecha,1,10)=substring(now(),1,10) and tipoAvance='$tipoAvance' and idUsuario='$idUsuario'");
                $dataAvance = mysqli_fetch_array($selectAvance);
                $checkExisteHoy = ejecutarSQL::consultar("SELECT substring(fecha,1,10) as fecha,dni,tipoAvance FROM avance where substring(fecha,1,10)=substring(now(),1,10) and dni='$dni' and tipoAvance='$tipoAvance' and idUsuario='$idUsuario'");
                $checktotalHoy = mysqli_num_rows($checkExisteHoy);
                if ($checktotalHoy != 0) {
                ?>
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-form">Actualizar <?= $tipoAvance; ?></div>
                    <!--<form action="#ModalList" method="post" class="form_SRCB" data-type-form="save">-->
                    <form action="process/UpdateAvance.php" method="POST">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <input type="hidden" id="dni" name="dni" value="<?= $dni; ?>">
                            <input type="hidden" id="idAvance" name="idAvance" value="<?= $dataAvance['idavance']; ?>">
                            <div class="group-material">
                                <span>Alumno</span>
                                <input disabled type="text"  id="nombres" class="material-control tooltips-general alumno" placeholder="Selecciona un alumno de la una de las secciones y aparecerá aquí" name="nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del usuario, solamente letras" value="<?= $dataAvance['nombres'] . ' ' . $dataAvance['apellidos']; ?>">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                            </div>
                            <div class="group-material">                                  
                                <span>Observación:</span>
                                <textarea name="observacion" class="form-control " id="observacion" rows="5" id="comment" placeholder="Escribe aquí las observaciones con respecto al avance del alumno"><?= $dataAvance['observacion']; ?></textarea>
                            </div>
                            <div class="group-material">
                                <span>Nombre Especialista:</span>
                                <input type="text" value="<?= $dataAvance['especialista']; ?>" class="material-control tooltips-general " id="nombreEspecialista" placeholder="Escribe aquí el nombre del espaecialista que atendió al alumno" name="nombreEspecialista" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el nombre completo del especialista, solamente letras" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                            </div>
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>

                                <button class="btn btn-primary"  data-toggle="modal" data-target='#add_evento'><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p>


                        </div>
                    </div>
                    </form>
                </div>
           <?php
                }  else {
                   echo'<script>location="catalogAvances.php";</script>';
                }
                ?>
            </div>

            <div class="msjFormSend"></div>
            
            <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                        </div>
                        <div class="modal-body">
                            <?php include '../help/help-adminliststudent.php'; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './inc/footer.php'; ?>
        </div>
    </body>
</html>