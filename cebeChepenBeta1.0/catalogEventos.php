
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Eventos</title>
        <?php
        session_start();
        $LinksRoute = "./";
        include './inc/links.php';
        ?>
        <script type="text/javascript" src="js/jPages.js"></script>
        <script src="js/SendForm.js"></script>
        <!--<script>
            $(document).ready(function(){
                $(function(){
                  $("div.holder").jPages({
                    containerID : "itemContainer",
                    perPage: 20
                  });
                });
                $('.list-catalog-container li').click(function(){
                   window.location="catalogAvances.php?StudentS="+$(this).attr("data-code-section");
                });
            });
        </script>-->
    </head>
    <body>
        <?php
        include 'library/configServer.php';
        include 'library/consulSQL.php';
        include 'process/SecurityUser.php';
        include 'inc/NavLateral.php';
        $StudentS = consultasSQL::CleanStringText($_GET['StudentS']);
        $StudentN = consultasSQL::CleanStringText($_GET['StudentN']);
        $hoy = date(time());
        $checkEventos = ejecutarSQL::consultar("SELECT title FROM eventos where substring(inicio_normal,1,2)=DAY(NOW()) AND substring(inicio_normal,4,2)=Month(NOW());");
        ?>
        <div class="content-page-container full-reset custom-scroll-containers">
            <?php
            include './inc/NavUserInfo.php';
            ?>
            <div class="container">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>- Administración de Eventos</small></h1>
                </div>
            </div>
            <div class="container-fluid"  style="margin: 50px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="panel panel-success">
                            <div class="panel-body btn-backup">
                                <div class="tile-icon col-md-5 ">
                                    <i class="zmdi zmdi-calendar-check" style="font-size:100px;"></i>
                                </div>
                                <div class="text-right ">
                                    <h1><?= mysqli_num_rows($checkEventos); ?></h1>
                                    <a href="admin/adminEventos.php" class="white-link">Eventos de hoy</a>        </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        Bienvenido a la sección donde se encuentra el listado de Eventos de la institución. Puedes actualizar o eliminar los datos del Evento.<br>
                        <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el evento del sistema se borrarán todos los datos relacionados con él.
                    </div>
                </div>

                <div class="col-md-8"></div>
                <div class="col-md-3 widget-container">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="zmdi zmdi-calendar"></i>&nbsp; Eventos    </div>
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 285px;"><div id="upcoming-event-container" style="overflow: hidden; width: auto; height: 285px;">
                                <div class="panel-body">
                                    <div style="min-height: 190px;">
                                        <?php
                                        if (mysqli_num_rows($checkEventos) > 0) {
                                            while ($fila = mysqli_fetch_array($checkEventos)) {
                                                ?>

                                                <div class="text-left"><li><?= $fila['title']; ?></li> </div>
                                                <?php
                                            }
                                            ?>
                                            <div class="text-center p15 text-off"><i class="zmdi zmdi-calendar-note" style="font-size:100px;"></i></div>            </div>

                                        <?php
                                    } else {
                                        ?>
                                        <div class="text-center">Ningún evento encontrado!</div><div class="text-center p15 text-off"><i class="zmdi zmdi-calendar-note" style="font-size:100px;"></i></div>            </div>
                                <?php } ?>
                                <div><a href="admin/adminEventos.php" class="btn btn-default b-a load-more mt15 center-block ">Lee en el calendario</a></div>
                            </div>
                        </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 285px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                </div>

                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#upcoming-event-container').slimscroll({
                            height: "285px",
                            borderRadius: "0",
                            color: "#ccc"
                        });
                    });
                </script>
            </div>
        </div>
        <div class="msjFormSend"></div>
        <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form class="form_SRCB modal-content" action="../process/UpdateStudent.php" method="post" data-type-form="update"  autocomplete="off">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center all-tittles">Actualizar datos de estudiante</h4>
                    </div>
                    <div class="modal-body" id="ModalData"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success"><i class="zmdi zmdi-refresh"></i> &nbsp;&nbsp; Guardar cambios</button>
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