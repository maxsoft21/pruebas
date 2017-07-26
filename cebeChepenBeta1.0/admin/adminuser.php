
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Administradores</title>
        <?php
        session_start();
        $LinksRoute = "../";
        include '../inc/links.php';
        ?>
        <script src="../js/SendForm.js"></script>
        <script>
            $(document).ready(function () {
                $(".input-check-user").keyup(function () {
                    $.ajax({
                        url: "../process/check-user.php?user=" + $(this).val(),
                        success: function (data) {
                            $(".check-user-bd").html(data);
                        }
                    });
                });
            });
            $().ready(function () {
                $(".check-tipoUsuario").change(function () {
                    $.ajax({
                        url: "../process/check_tipoUsuario.php?idRol=" + $(this).val(),
                        success: function (data) {
                            $(".representative-resul").html(data);
                        }
                    });
                });
            });
             
        </script>
    </head>
    <body>
        <?php
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        include '../process/SecurityAdmin.php';
        include '../inc/NavLateral.php';
        ?>
        <div class="content-page-container full-reset custom-scroll-containers">
            <?php
            include '../inc/NavUserInfo.php';
            ?>
            <div class="container">
                <div class="page-header">
                    <h1 class="all-tittles">Sistema cebe chepén <small>- Administración Usuarios</small></h1>
                </div>
            </div>
            <div class="container-fluid">
                <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                    <li role="presentation"  class="active"><a href="adminuser.php">Usuarios</a></li>
                    <li role="presentation"><a href="adminlistteacher.php">Docentes</a></li>
                    <li role="presentation"><a href="adminliststudent.php">Estudiantes</a></li>
                    <li role="presentation"><a href="adminlistpersonal.php">Personal</a></li>
                </ul>
            </div>
            <div class="container-fluid"  style="margin: 50px 0;">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <img src="../assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                        Bienvenido a la sección para registrar nuevos usuarios del sistema, debes de llenar todos los campos del siguiente formulario para registrar un administrador
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 lead">
                        <ol class="breadcrumb">
                            <li class="active">Nuevo Usuario</li>
                            <li><a href="adminlistuser.php">Listado de Usuarios</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                
                <div class="container-flat-form">
                    <div class="title-flat-form title-flat-blue">Registrar un nuevo usuario</div>
                    <form action="../process/AddAdmin.php" method="post" class="form_SRCB" data-type-form="save" autocomplete="off">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <?php
                                
                                $checkRol = ejecutarSQL::consultar("select * from rol");
                                if (mysqli_num_rows($checkRol) <= 0) {
                                    echo '<br><div class="alert alert-danger text-center" role="alert"><strong><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante!:</strong> No puedes registrar usuarios, primero debes de agregar roles al sistema</div>';
                                }
                                ?>
                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de DNI del usuario" name="dni" pattern="[0-9-]{8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente números , 8 dígitos">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Número de DNI</label>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los nombres del usuario" name="nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres del usuario, solamente letras">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Nombres</label>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí los apellidos del usuario" name="apellidos" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}" required="" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los apellidos del usuario, solamente letras">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Apellidos</label>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="tooltips-general material-control" placeholder="Escribe aquí la dirección del usuario" name="direccion" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del usuario">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Dirección</label>
                                </div>
                                <div class="group-material">
                                    <input type="email" class="material-control tooltips-general" placeholder="correo del usuario" name="correo" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe el Email del usuario">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Correo</label>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de teléfono del docente" name="telefono" pattern="[0-9]{9,9}"  maxlength="9" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Teléfono</label>
                                </div>
                                <div class="group-material">
                                    <input type="date" class="tooltips-general material-control"  name="fechaNacimiento" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe la fecha de nacimiento del usuario">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Fecha Nacimiento</label>
                                </div>
                                <div class="group-material">
                                    <span>Rol</span>
                                    <select class="material-control tooltips-general check-tipoUsuario" name="adminRol" data-toggle="tooltip" data-placement="top" title="Elige el Rol al que pertenece el usuario" required>
                                        <option value="" disabled="" selected="">Selecciona un Rol</option>
                                        <?php
                                        if (mysqli_num_rows($checkRol) > 0) {
                                            while ($fila = mysqli_fetch_array($checkRol)) {
                                                $checkStudentSection = ejecutarSQL::consultar("select * from rol where idRol='" . $fila['idRol'] . "' order by idRol");
                                                $row = mysqli_fetch_array($checkStudentSection);
                                                echo '<option value="' . $row['idRol'] . '">' . $row['descripcion'] . '</option>';
                                                mysqli_free_result($checkStudentSection);
                                            }
                                        }
                                        mysqli_free_result($checkRol);
                                        ?>
                                    </select>
                                </div>

                                <div class="full-reset representative-resul"></div>

                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general input-check-user" placeholder="Nombre de usuario" name="adminUserName" required="" maxlength="20" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}" data-toggle="tooltip" data-placement="top" title="Escribe un nombre de usuario sin espacios, que servira para iniciar sesión">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Nombre de usuario</label>
                                    <div class="check-user-bd"></div>
                                </div>
                                <div class="group-material">
                                    <input type="password" class="material-control tooltips-general" placeholder="Contraseña" name="adminPassword1" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Escribe una contraseña">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Contraseña</label>
                                </div>
                                <div class="group-material">
                                    <input type="password" class="material-control tooltips-general" placeholder="Repite la contraseña" name="adminPassword2" required="" maxlength="200" data-toggle="tooltip" data-placement="top" title="Repite la contraseña">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Repetir contraseña</label>
                                </div>

                                <p class="text-center">
                                    <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                    <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                                </p> 
                            </div>
                        </div>
                    </form>
                </div>
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
                            <?php include '../help/help-adminuser.php'; ?>
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