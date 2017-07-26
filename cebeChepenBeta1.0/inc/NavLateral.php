<?php
if ($LinksRoute == "../") {
    $LinkRouteAdmin = "";
} else if ($LinksRoute == "../../") {
    $LinkRouteAdmin = "../";
} else {
    $LinkRouteAdmin = "./admin/";
}
if ($_SESSION['UserPrivilege'] == 'Teacher') {
    if ($_SESSION['UserPrivilege'] == 'Teacher') {
        $tableUser = "prestamodocente";
        $key = "dni";
    }
    $checkAllLoansU = ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Reservacion'");
    $totalR = 0;
    while ($tmp3 = mysqli_fetch_array($checkAllLoansU)) {
        $checkReservationPending = ejecutarSQL::consultar("SELECT * FROM " . $tableUser . " WHERE " . $key . "='" . $_SESSION['primaryKey'] . "' AND CodigoPrestamo='" . $tmp3['CodigoPrestamo'] . "'");
        if (mysqli_num_rows($checkReservationPending) >= 1) {
            $totalR = $totalR + 1;
        }
        mysqli_free_result($checkReservationPending);
    }
    mysqli_free_result($checkAllLoansU);
}
?>
<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left " style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
            sistema cebe chepén
        </div>
        <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
            <figure>
                <img src="<?php echo $LinksRoute; ?>assets/img/insignia.jpg" alt="Cebe Chepén" class="img-responsive center-box" style="width:35%;" id="img">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Sistema cebe chepén</p>
        </div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <?php
                /* $_SESSION['UserPrivilege']=='Student'||||$_SESSION['UserPrivilege']=='Personal' */
                if ($_SESSION['UserPrivilege'] == 'Teacher') {
                    echo '<li><a href="' . $LinksRoute . 'catalog.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li> <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Avances de Alumnos<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                
                                <li><a href="' . $LinkRouteAdmin . 'adminAvance.php"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Avance</a></li>
                            
                                <li><a href="' . $LinksRoute . 'catalogAvances.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>  
                            </ul>
                        </li>';

                    if ($totalR >= 1) {
                        echo '<li><a href="reservations.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reservaciones<span class="label label-danger pull-right label-mhover">' . $totalR . '</span></a></li>';
                    }
                    /*           */
                } else if ($_SESSION['UserPrivilege'] == 'Personal') {
                    echo ' <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Avances de Alumnos<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                
                                <li><a href="' . $LinkRouteAdmin . 'adminAvance.php"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Avance</a></li>
                            
                                <li><a href="' . $LinksRoute . 'catalogAvances.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>  
                            </ul>
                        </li>';
                } else if ($_SESSION['UserPrivilege'] == 'Auxiliar') {
                    echo ' <li>
                                <li><a href="' . $LinksRoute . 'catalogAvances.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>  
                                <li><a href="' . $LinkRouteAdmin . 'adminreportaux.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                            
                        </li>';
                } else if ($_SESSION['UserPrivilege'] == 'PersonalAsistenteSocial') {
                    echo ' <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Cronograma Eventos<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                
                                <li><a href="' . $LinkRouteAdmin . 'adminEventos.php"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Evento</a></li>
                            
                                <li><a href="' . $LinksRoute . 'catalogEventos.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Eventos</a></li>  
                            </ul>
                        </li>';
                } else if ($_SESSION['UserPrivilege'] == 'Admin') {
                    echo '
                        <li><a href="' . $LinksRoute . 'home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="' . $LinkRouteAdmin . 'admininstitution.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Datos institución</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminprovider.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo proveedor</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'admincategory.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminsection.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva sección</a></li>                              
                                
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="' . $LinkRouteAdmin . 'adminuser.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Usuario</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminlistteacher.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Docentes</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminliststudent.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Estudiantes</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminlistpersonal.php"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>&nbsp;&nbsp; Personal administrativo</a></li>
                            </ul>
                        </li>
                        
                         <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Avances de Alumnos<i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                
                                <li><a href="' . $LinkRouteAdmin . 'adminAvance.php"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Avance</a></li>
                            
                                <li><a href="' . $LinksRoute . 'catalogAvances.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>  
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-folder-star zmdi-hc-fw"></i>&nbsp;&nbsp; Mini Biblioteca <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                            <li><a href="' . $LinksRoute . 'miniBiblioteca.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>&nbsp;&nbsp; Ir a la minibiblioteca</a></li>                              
                                <li><a class="btn-addBook" href="#" data-process="' . $LinksRoute . 'process/checkDataAdmin.php" data-href="' . $LinkRouteAdmin . 'admininventory.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
  <li><a href="' . $LinksRoute . 'catalog.php"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo Libros</a></li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="' . $LinkRouteAdmin . 'adminloan.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminloanpending.php">
                                    <i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Devoluciones pendientes';
                    $checkLoanPending1 = ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Prestamo'");
                    if (mysqli_num_rows($checkLoanPending1) > 0) {
                        echo '<span class="label label-danger pull-right label-mhover">' . mysql_num_rows($checkLoanPending1) . '</span>';
                    }
                    mysqli_free_result($checkLoanPending1);
                    echo '</a></li>
                                <li><a href="' . $LinkRouteAdmin . 'adminreservation.php">
                                    <i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reservaciones';
                    $checkReservation1 = ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Reservacion'");
                    if (mysqli_num_rows($checkReservation1) > 0) {
                        echo '<span class="label label-danger pull-right label-mhover">' . mysql_num_rows($checkReservation1) . '</span>';
                    }
                    mysqli_free_result($checkReservation1);
                    echo '</a></li>
                            </ul>
</ul>
                            
                        </li>
                        
                        <li><a href="' . $LinksRoute . 'admin/gestores/"><i class="zmdi zmdi-book-image zmdi-hc-fw"></i>&nbsp;&nbsp; Gestores</a></li>
                            
                        <li><a href="' . $LinkRouteAdmin . 'adminreport.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
                        <li><a href="' . $LinkRouteAdmin . 'adminadvancesettings.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
                        <li><a href="' . $LinkRouteAdmin . 'ayudaCebeChepen.chm"><i class="glyphicon glyphicon-question-sign glyphicon-cloud-download"></i>&nbsp;&nbsp;Descargar Manuales</a></li>
                        ';
                }
                ?>
            </ul>
        </div>
    </div>
</div>