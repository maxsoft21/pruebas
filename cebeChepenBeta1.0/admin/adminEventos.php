<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Cronograma Eventos</title>
        <?php
        session_start();
        $LinksRoute = "../";
        include '../inc/links.php';
        ?>
        <script src="../js/SendForm.js"></script>

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
            <div class="container ">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>Administración de Eventos</small></h1>
                </div>
            </div>
            <?php
            include '../calendario/index.php';
            ?>

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