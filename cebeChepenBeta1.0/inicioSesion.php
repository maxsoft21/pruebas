
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de sesión</title>
        <?php
        session_start();
        $LinksRoute = "./";
        include './inc/links.php';

        include 'library/configServer.php';
        include 'library/consulSQL.php';
        if ($_SESSION['UserPrivilege'] == 'Admin') {
            header("Location: home.php");
            exit();
        } else if ($_SESSION['UserPrivilege'] == 'Student') {
            header("Location: areaJuegosEducativos.php");
            exit();
        }else if ($_SESSION['UserPrivilege'] == 'PersonalAsistenteSocial') {
            header("Location: catalogEventos.php");
            exit();
        }else if ($_SESSION['UserPrivilege'] == 'Teacher') {
            header("Location: catalog.php");
            exit();
        }else if ($_SESSION['UserPrivilege'] == 'Personal') {
            header("Location: catalogAvances.php");
            exit();
        } else {
            
        }
        ?>
        <link rel="stylesheet" href="css/login.css"/>
        <script src="js/SendForm.js"></script>
    </head>
    <body class="full-cover-background" style="background-image:url(assets/img/fondoInicioSesion.jpg); background-size: 100% 100%">
        <div class="form-container">
            <p class="text-center" style="margin-top: 17px;">
                <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            </p>
            <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
            <form action="process/login.php" method="post" class="form_SRCB" data-type-form="login" autocomplete="off">
                <div class="group-material-login">
                    <input type="text" class="material-login-control"  name="loginName" required="" maxlength="70">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-account"></i> &nbsp; Nombre</label>
                </div><br>
                <div class="group-material-login">
                    <input type="password" class="material-login-control" name="loginPassword" required="" maxlength="70">
                    <span class="highlight-login"></span>
                    <span class="bar-login"></span>
                    <label><i class="zmdi zmdi-lock"></i> &nbsp; Contraseña</label>
                </div>

                <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>
            </form>
        </div>  
        <div class="msjFormSend hidden"></div>
    </body>
</html>