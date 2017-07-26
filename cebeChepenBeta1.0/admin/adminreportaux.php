
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Reportes</title>
        <?php
        session_start();
        if ($_SESSION['UserPrivilege'] == 'Auxiliar') {
           } else {
            header("Location: ../process/logout.php");
            exit();
        }
        $LinksRoute = "../";
        include '../inc/links.php';
        ?>
        <link rel="stylesheet" href="../css/timeline.css">
        <script>
            $(document).ready(function () {
                $('.btn-file').on('click', function () {
                    var file;
                    var uTipe;
                    var urlData;
                    var title1;
                    var text1;
                    var text2;
                    var file_type = $(this).attr('data-type');
                    if (file_type === "file") {
                        file = $(this).attr('data-file');
                        urlData = '../process/checkInstitution.php';
                        title1 = "¿Quieres generar la ficha?";
                        text1 = "La ficha se generará en formato PDF y se abrirá en una ventana nueva. Debes esperar un lapso de tiempo de 15 segundos para que el sistema genere la ficha";
                        text2 = "No puedes generar fichas, primero debes de registrar los datos de la institución. Ve a la opción Administración del menú y luego a Datos institución";
                    }
                    if (file_type === "report") {
                        file = $(this).attr('data-file');
                        urlData = $(this).attr('data-check');
                        title1 = "¿Quieres generar el reporte?";
                        text1 = "El reporte se generará en formato PDF y se abrirá en una ventana nueva. Debes esperar unos minutos para que el sistema genere el reporte";
                        text2 = "Lo sentimos no puedes generar el reporte, no hay registros en el sistema";
                    }
                    if (file_type === "reportLP") {
                        uTipe = $(this).attr('data-user');
                        file = '../report/ReportLoansPending.php?user=' + uTipe;
                        urlData = '../process/CheckLoansPending.php?user=' + uTipe;
                        title1 = "¿Quieres generar el reporte?";
                        text1 = "El reporte de devoluciones pendientes se generará en formato PDF y se abrirá en una ventana nueva. Debes esperar unos minutos para que el sistema genere el reporte";
                        text2 = "Lo sentimos no puedes generar el reporte, no hay devoluciones pendientes de este tipo de usuario";
                    }
                    swal({
                        title: title1,
                        text: text1,
                        type: "info",
                        showCancelButton: true,
                        confirmButtonColor: "#31B0D5",
                        confirmButtonText: "Si, generar",
                        cancelButtonText: "No, cancelar",
                        animation: "slide-from-top",
                        closeOnConfirm: false
                    }, function () {
                        $.ajax({
                            url: urlData,
                            success: function (data) {
                                if (data === "Avaliable") {
                                    window.open(file, "_blank");
                                    swal.close();
                                } else if (data === "NotAvaliable") {
                                    swal({
                                        title: "¡Ocurrió un error inesperado!",
                                        text: text2,
                                        type: "error",
                                        confirmButtonText: "Aceptar"
                                    });
                                } else {
                                    swal({
                                        title: "¡Ocurrió un error inesperado!",
                                        text: "Ocurrió un error al procesar la petición, por favor recarga la página e intenta nuevamente",
                                        type: "error",
                                        confirmButtonText: "Aceptar"
                                    });
                                }
                            }
                        });
                        return false;
                    });
                });
            });
        </script>
    </head>
    <body>
        <?php
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        include '../library/SelectMonth.php';
        
        include '../inc/NavLateral.php';
        ?>
        <div class="content-page-container full-reset custom-scroll-containers">
            <?php
            include '../inc/NavUserInfo.php';
            ?>
            <div class="container">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>- Reportes </small></h1>
                </div>
            </div>
            <div class="container-fluid">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li role="presentation"><a href="#reports" aria-controls="reports" role="tab" data-toggle="tab">Reportes </a></li>
                </ul>
                <div>
                    
                    <div id="reports">
                        <div class="container-fluid"  style="margin: 50px 0;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-3">
                                    <img src="../assets/img/pdf.png" alt="pdf" class="img-responsive center-box" style="max-width: 120px;">
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                                    Bienvenido al área de reportes, aquí puedes generar reportes de avances de los alumnos y sus asistencias.
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="page-header">
                                    <h2 class="all-tittles">reportes <small>asistencias</small></h2>
                                </div><br><div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportGeneralAsistencia.php" data-check="../process/check-X.php?tabla=asistencia" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte General de Asistencias</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportGeneralAsistenciaHoy.php" data-check="../process/check-X.php?tabla=asistencia" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte Asistencias (Hoy)</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x "></i>
                                        </p>
                                        <h3 class="text-center">Reporte Asistencias (por alumno) secciones:</h3>
                                        <div class="container-fluid" style="margin: 0 0 50px 0;">

                                            <ul class="list-unstyled text-center list-catalog-container">
                                                <?php
                                                $selectSections = ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion!=1 ORDER BY Nombre ASC");
                                                $i = 0;
                                                while ($fila = mysqli_fetch_array($selectSections)) {
                                                    $i++;
                                                    ?>
                                                    <a class="btn btn-list " data-code="<?= $fila['CodigoSeccion']; ?>" data-url="../process/ListDataAlumno_X.php?reporte=ReportGeneralAsistenciaXAlumno"><i class="zmdi zmdi-refresh"></i> <?= $fila['Nombre']; ?></a> 

                                                    <?php
                                                }
                                                mysqli_free_result($selectSections);
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="page-header">
                                    <h2 class="all-tittles">reportes <small>avances generales</small></h2>
                                </div><br><div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportGeneralAvances.php" data-check="../process/check-X.php?tabla=avance" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte General de Avances</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportAvanceSection.php" data-check="../process/check-X.php?tabla=avance" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Avances Registrados (por Sección)</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportAvanceAlumno.php" data-check="../process/check-X.php?tabla=avance" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Avances Registrados (por alumno)</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportGeneralAvanceJuegos.php" data-check="../process/check-X.php?tabla=juego" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte General de Avances (Juegos)</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportGeneralAvanceJuegosHoy.php" data-check="../process/check-X.php?tabla=juego" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte de Avances Juegos (Hoy)</h3>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="full-reset report-content">
                                        <p class="text-center">
                                            <i class="zmdi zmdi-trending-up zmdi-hc-5x btn-file" data-file="../report/ReportAvanceAlumno.php" data-check="../process/check-X.php?tabla=juego" data-type="report"></i>
                                        </p>
                                        <h3 class="text-center">Reporte de Avances Juegos (por alumno) secciones:</h3>
                                        <div class="container-fluid" style="margin: 0 0 50px 0;">

                                            <ul class="list-unstyled text-center list-catalog-container">
                                                <?php
                                                $selectSections1 = ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion!=1 ORDER BY Nombre ASC");
                                                $i1 = 0;
                                                while ($fila = mysqli_fetch_array($selectSections1)) {
                                                    $i1++;
                                                    ?>
                                                    <a class="btn btn-list " data-code="<?= $fila['CodigoSeccion']; ?>" data-url="../process/ListDataAlumno_X.php?reporte=ReportGeneralAvanceJuegosXAlumno"><i class="zmdi zmdi-refresh"></i> <?= $fila['Nombre']; ?></a> 

                                                    <?php
                                                }
                                                mysqli_free_result($selectSections1);
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ModalList" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <form class="form_SRCB modal-content" action="" method="post"   autocomplete="off">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center all-tittles">Seleccionar Alumno</h4>
                        </div>

                        <div class="modal-body" id="ModalData">

                            <div class="full-reset representative-resul"></div>
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
                            <?php include '../help/help-adminreport.php'; ?>
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