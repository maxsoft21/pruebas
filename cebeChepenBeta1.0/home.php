
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php
        session_start();
        $LinksRoute="./";
        include './inc/links.php'; 
    ?>
</head>
<body>
    <?php 
        include './library/configServer.php';
        include './library/consulSQL.php';
        if ($_SESSION['UserPrivilege']=='Admin') {
    
        }  else {
            header("Location: process/logout.php");
            exit();
        }
        include './inc/NavLateral.php';
    ?>
    <div class="content-page-container full-reset custom-scroll-containers">
        <?php 
            include './inc/NavUserInfo.php';
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema cebe chepén <small>- Inicio</small></h1>
            </div>
        </div>
        <?php 
            $checkAdmins=ejecutarSQL::consultar("SELECT * FROM usuario WHERE idRol <> 1");
            $checkStudents=ejecutarSQL::consultar("SELECT * FROM alumno WHERE estado='Activo'");
            $checkTeachers=ejecutarSQL::consultar("SELECT * FROM docente");
            $checkPersonalA=ejecutarSQL::consultar("SELECT * FROM personal");
            $checkAvances=ejecutarSQL::consultar("SELECT * FROM avance");
            $checkSections=ejecutarSQL::consultar("SELECT * FROM seccion");
        ?>
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile" data-href="./admin/adminlistuser.php" data-num="<?php echo mysqli_num_rows($checkAdmins); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">usuarios</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkAdmins); ?></div>
            </article>
            <article class="tile" data-href="./admin/adminliststudent.php" data-num="<?php echo mysqli_num_rows($checkStudents); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles">estudiantes</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkStudents); ?></div>
            </article>
            <article class="tile" data-href="./admin/adminlistteacher.php" data-num="<?php echo mysqli_num_rows($checkTeachers); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
                <div class="tile-name all-tittles">docentes</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkTeachers); ?></div>
            </article>
            <article class="tile" data-href="./admin/adminlistpersonal.php" data-num="<?php echo mysqli_num_rows($checkPersonalA); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">personal administrativo</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkPersonalA); ?></div>
            </article>
            <article class="tile" data-href="./catalogAvances.php" data-num="<?php echo mysqli_num_rows($checkAvances); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book-image"></i></div>
                <div class="tile-name all-tittles">Avances</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkAvances); ?></div>
            </article>
           
            <article class="tile" data-href="./admin/adminlistsection.php" data-num="<?php echo mysqli_num_rows($checkSections); ?>">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
                <div class="tile-name all-tittles">secciones</div>
                <div class="tile-num full-reset"><?php echo mysqli_num_rows($checkSections); ?></div>
            </article>
            <article class="tile" data-href="./miniBiblioteca.php" data-num="1">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
                <div class="tile-name all-tittles">Mini Biblioteca</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
            <article class="tile" data-href="./admin/gestores/" data-num="1">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-image-o"></i></div>
                <div class="tile-name all-tittles">Gestores</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
            
            <article class="tile" data-href="./admin/adminreport.php" data-num="1">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
        </section>
        <?php
           
            mysqli_free_result($checkAdmins);
            mysqli_free_result($checkStudents);
            mysqli_free_result($checkTeachers);
            mysqli_free_result($checkSections);
            mysqli_free_result($checkPersonalA);
        ?>
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
                setTimeout(function () { $(".habla").click(); }, 250);
        </script>
    </div>
    
</body>
</html>