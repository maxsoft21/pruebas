<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galería</title>
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
        <!--======================================== Contenido de la pagina ========================================-->

        <section class="full-reset section-gallery-ins">
            <!--======================================== Eventos del 2013 ========================================-->
            <article class="container">
                <h2 class="text-center"><i class="fa fa-calendar-o"></i> &nbsp; Eventos del Año </h2>
                <div class="row">
                    <!--======================================== Evento 1========================================-->
                    <?php
                    $selectItem = ejecutarSQL::consultar("SELECT * FROM galeria WHERE YEAR(fecha)= YEAR(NOW()) ORDER BY orden ASC");
                    while ($fila = mysqli_fetch_array($selectItem)) {
                        ?>
                        <!--<div class="row" id="galeria">

                            <ul>
                                <li>
                                    <a rel="grupo" href="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>">
                                        <img src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>">
                                    </a>
                                </li>
                            </ul></div>-->
                    
                        <div class="col-xs-12 col-sm-6 col-md-4" >
                            <div class="tile-gallery">
                                <img src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>" alt="Default">

                                <div class="divider-general"></div>
                                <a href="#imagen<?= $fila["id"]; ?>" data-toggle="modal">
                                <!--<a rel="grupo" href="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>">-->
                                    <i class="fa fa-picture-o"></i> &nbsp; Ver foto
                                </a>
                            </div>
                        </div>

                        <div id="imagen<?= $fila['id']; ?>" class="modal fade">

                            <div class="modal-dialog modal-content">

                                <div class="modal-header" style="border:1px solid #eee">

                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="modal-title"></h3>

                                </div>

                                <div class="modal-body" style="border:1px solid #eee">

                                    <img src="<?= '../admin/gestores/' . str_replace('../', '', $fila['ruta']); ?>" width="100%" style="margin-bottom:20px">

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
        <!--======================================== Pie de pagina ========================================-->
        <?php include './inc/footer.html'; ?>
    </body>
</html>