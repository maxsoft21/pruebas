
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
                            <?php if ($_SESSION['UserPrivilege'] != 'Auxiliar') {
                                ?>
                                <li><a href="admin/adminAvance.php">Nuevo Avance</a></li>
                                <?php
                            } else {
                                ?>

                                <?php
                            }
                            ?>
                            <li class="active">Listado de Avances</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="margin: 0 0 50px 0;">
                <div class="pull-right" style="width: 30% !important;" >
                    <div class="group-material">
                        <input type="search" id="busca" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar estudiante" name="StudentN" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                        <button class="btn btn-busca" data-url="process/ListDataAlumno_Avances.php" style="margin: 0; height: 43px; background-color: transparent !important;">
                            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                        </button>
                    </div>
                </div>
                <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Secciones</h2>
                <ul class="list-unstyled text-center list-catalog-container">
                    <?php
                    $selectSections = ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion !=1 ORDER BY Nombre ASC");
                    while ($fila = mysqli_fetch_array($selectSections)) {
                        ?>
                        <li class="list-catalog btn-select " data-url="process/ListDataAlumno_Avances.php" data-code="<?= $fila['CodigoSeccion']; ?>"><?= $fila['Nombre']; ?> </li>
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
                    <form class="form_SRCB modal-content" action="../process/UpdateAdmin.php" method="post" data-type-form="update"  autocomplete="off">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">Tipos de Avances</h4>
                        </div>
                        <div class="modal-body" id="ModalData"></div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
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
                            <?php include '../help/help-adminliststudent.php'; ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include './inc/footer.php'; ?>
            <input type="hidden" class="habla">
            <script src="js/responsivevoice.js"></script>
            <script>
            function Hablar() {
                $(".habla").on('click', frase);
            }
            function frase() {
                //e.preventDefault();
                var text = "Bienvenido-al-sistema";
                responsiveVoice.speak(text, "Spanish Female");
                text = encodeURIComponent(text);
            }
            Hablar();
            setTimeout(function () {
                $(".habla").click();
            }, 250);
            </script>
        </div>
    </body>
</html>