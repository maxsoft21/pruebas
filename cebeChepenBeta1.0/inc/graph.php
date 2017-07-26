<?php
function Cporcent($NT, $CT, $DC)
{
    $Res = number_format($NT / $CT, $DC) * 100;
    return $Res;
}

$selectINS = ejecutarSQL::consultar("SELECT * FROM institucion");
$DataI = mysqli_fetch_array($selectINS);
$selectallLoans = ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Entregado'");
$totalSelected = 0;
while ($dat = mysqli_fetch_array($selectallLoans)) {
    $SYear = date("Y", strtotime($dat['FechaSalida']));
    if ($DataI['Year'] == $SYear) {
        $totalSelected++;
    }
}
$totalLoansStudents = 0;
$totalLoansTeacher = 0;
$totalLoansVisitor = 0;
$totalLoansPersonal = 0;
$totalLeve = 0;
$totalSevera = 0;
$totalMultidiscapacidad = 0;
$selectallLoans2 = ejecutarSQL::consultar("SELECT * , YEAR(now()) as FechaActual FROM avance ");
$totalSelectedAvance = 0;




while ($filaD = mysqli_fetch_array($selectallLoans2)) {
    $SelectYear = date("Y", strtotime($filaD['FechaActual']));
    if ($DataI['Year'] == $SelectYear) {
        $totalSelectedAvance++;
        /*$checkingUser1=ejecutarSQL::consultar("SELECT * FROM prestamoestudiante WHERE CodigoPrestamo='".$filaD['CodigoPrestamo']."'");
        if(mysql_num_rows($checkingUser1)>=1){
            $totalLoansStudents++;
        }*/
        $checkingUser2 = ejecutarSQL::consultar("SELECT * FROM alumno a INNER JOIN avance av on av.dni=a.dni WHERE a.tipoDiscapacidad='Leve'");
        if (mysqli_num_rows($checkingUser2) >= 1) {
            $totalLeve++;
        }
         $checkingUser3=ejecutarSQL::consultar("SELECT * FROM alumno a INNER JOIN avance av on av.dni=a.dni WHERE a.tipoDiscapacidad='Severa'");
         if(mysqli_num_rows($checkingUser3)>=1){
             $totalSevera++;
         }
         $checkingUser4=ejecutarSQL::consultar("SELECT * FROM alumno a INNER JOIN avance av on av.dni=a.dni WHERE a.tipoDiscapacidad='Multidiscapacidad'");
         if(mysqli_num_rows($checkingUser4)>=1){
             $totalMultidiscapacidad++;
         }
        // mysql_free_result($checkingUser1);
        mysqli_free_result($checkingUser2);
        mysqli_free_result($checkingUser3);
        mysqli_free_result($checkingUser4);
    }
}
?>
    <div class="page-header">
        <h2 class="all-tittles">Avances
            <small>en general</small>
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">total avances registrados del año <?php echo $DataI['Year']; ?></h3>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Tipo Discapacidad</th>
                        <th class="text-center">N. Registrados</th>
                        <th class="text-center">Porcentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Leve</td>
                        <td><?php echo $totalLeve; ?></td>
                        <td><?php echo $TL = Cporcent($totalLeve, $totalSelectedAvance, 3); ?>%</td>
                    </tr>
                    <tr>
                        <td>Severa</td>
                        <td><?php echo $totalSevera; ?></td>
                        <td><?php echo $TS = Cporcent($totalSevera, $totalSelectedAvance, 3); ?>%</td>
                    </tr>
                    <tr>
                        <td>Multidiscapacidad</td>
                        <td><?php echo $totalMultidiscapacidad; ?></td>
                        <td><?php echo $TM = Cporcent($totalMultidiscapacidad, $totalSelectedAvance, 3); ?>%</td>
                    </tr>

                    </tbody>
                    <tfoot>
                    <tr class="info">
                        <th class="text-center">Total</th>
                        <th class="text-center"><?php echo $totalSelectedAvance; ?></th>
                        <th class="text-center"><?php echo $TL + $TS + $TM ?>%</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para
                imprimir esta tabla ve a la sección de reportes y selecciona “Avances Registrados (por alumno)”</p>
        </div>
    </div>

    <div class="page-header">
        <h2 class="all-tittles">Avances alumnos
            <small>por sección</small>
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">avances de alumnos por sección año <?php echo $DataI['Year']; ?></h3>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Sección</th>
                        <th class="text-center">N. Avances</th>
                        <th class="text-center">Porcentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $selectAllSections = ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion!=1 ORDER BY Nombre ASC");
                    $CounterSectPorcent = 0;
                    while ($DataSect = mysqli_fetch_array($selectAllSections)) {
                        $selectST = ejecutarSQL::consultar("SELECT * FROM alumno a inner join datospersonales dp on a.dni=dp.dni INNER JOIN avance av on av.dni=dp.dni WHERE dp.CodigoSeccion='" . $DataSect['CodigoSeccion'] . "'");
                        $CounterSect=mysqli_num_rows($selectST);
                        $TotalPorcent = Cporcent($CounterSect, $totalSelectedAvance, 3);
                        echo '<tr><td>' . $DataSect['Nombre'] . '</td><td>' . $CounterSect . '</td><td>' . $TotalPorcent . '%</td></tr>';
                        $CounterSectPorcent = $CounterSectPorcent + $TotalPorcent;
                    }
                    mysqli_free_result($selectAllSections);
                    ?>
                    </tbody>
                    <tfoot>
                    <tr class="info">
                        <th class="text-center">Total</th>
                        <th class="text-center"><?php echo $totalSelectedAvance; ?></th>
                        <th class="text-center"><?php echo $CounterSectPorcent; ?>%</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para
                imprimir esta tabla ve a la sección de reportes y selecciona “Avances registrados (por sección)”</p>
        </div>
    </div>
    <div class="page-header">
        <h2 class="all-tittles">préstamos libros
            <small>en general</small>
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">total préstamos del año <?php echo $DataI['Year']; ?></h3>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Tipo usuario</th>
                        <th class="text-center">N. Préstamos</th>
                        <th class="text-center">Porcentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Docentes</td>
                        <td><?php echo  $totalSelected; ?></td>
                        <td><?php echo $TTP = Cporcent( $totalSelected, $totalSelected, 3); ?>%</td>
                    </tr>

                    </tbody>
                    <tfoot>
                    <tr class="info">
                        <th class="text-center">Total</th>
                        <th class="text-center"><?php echo $totalSelected; ?></th>
                        <th class="text-center"><?php echo $TEP + $TTP + $TVP + $TPP ?>%</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para
                imprimir esta tabla ve a la sección de reportes y selecciona “Préstamos entregados (por usuarios)”</p>
        </div>
    </div>
    <div class="page-header">
        <h2 class="all-tittles">préstamos libros
            <small>por sección</small>
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">préstamos de Docentes por sección
                año <?php echo $DataI['Year']; ?></h3>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Sección</th>
                        <th class="text-center">N. Préstamos</th>
                        <th class="text-center">Porcentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $selectallLoans=ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Entregado'");
                    $totalLoansStudents=0;
                    while($filaD=mysqli_fetch_array($selectallLoans)){
                        $SelectYear=date("Y",strtotime($filaD['FechaSalida']));
                        if($DataI['Year']==$SelectYear){
                            $checkingUser1=ejecutarSQL::consultar("SELECT * FROM prestamodocente WHERE CodigoPrestamo='".$filaD['CodigoPrestamo']."'");
                            if(mysqli_num_rows($checkingUser1)>=1){
                                $totalLoansStudents++;
                            }
                            mysqli_free_result($checkingUser1);
                        }
                    }
                    $selectAllSections=ejecutarSQL::consultar("SELECT * FROM seccion where CodigoSeccion!=1 ORDER BY Nombre ASC");
                    $CounterSectPorcent=0;
                    while($DataSect=mysqli_fetch_array($selectAllSections)){
                        $selectST=ejecutarSQL::consultar("SELECT * FROM docente d inner join datospersonales dp on dp.dni=d.dni inner join seccion s on s.CodigoSeccion=dp.CodigoSeccion WHERE dp.CodigoSeccion='".$DataSect['CodigoSeccion']."'");
                        $CounterSect=0;
                        while($DataST=mysqli_fetch_array($selectST)){
                            $selectLS=ejecutarSQL::consultar("SELECT * FROM prestamodocente p inner join datospersonales dp on dp.dni=p.dni WHERE dp.dni='".$DataST['dni']."'");
                            while($DataLS=mysqli_fetch_array($selectLS)){
                                $selectAL=ejecutarSQL::consultar("SELECT * FROM prestamo WHERE CodigoPrestamo='".$DataLS['CodigoPrestamo']."' AND Estado='Entregado'");
                                while($DataAL=mysqli_fetch_array($selectAL)){
                                    $SY=date("Y",strtotime($DataAL['FechaSalida']));
                                    if($DataI['Year']==$SY){ $CounterSect++; }
                                }
                                mysqli_free_result($selectAL);
                            }
                            mysqli_free_result($selectLS);
                        }
                        mysqli_free_result($selectST);
                        $TotalPorcent=Cporcent($CounterSect, $totalLoansStudents, 3);
                        echo '<tr><td>' . $DataSect['Nombre'] . '</td><td>' . $CounterSect . '</td><td>' . $TotalPorcent . '%</td></tr>';

                        $CounterSectPorcent=$CounterSectPorcent+$TotalPorcent;
                    }

                    mysqli_free_result($selectAllSections);
                    ?>
                    </tbody>
                    <tfoot>
                    <tr class="info">
                        <th class="text-center">Total</th>
                        <th class="text-center"><?php echo $totalLoansStudents; ?></th>
                        <th class="text-center"><?php echo $CounterSectPorcent; ?>%</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para
                imprimir esta tabla ve a la sección de reportes y selecciona “Préstamos entregados (por sección)”</p>
        </div>
    </div>
    <div class="page-header">
        <h2 class="all-tittles">libros
            <small>por categorías</small>
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <h3 class="text-center all-tittles">libros por categorías año <?php echo $DataI['Year']; ?></h3>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Categoría</th>
                        <th class="text-center">Código</th>
                        <th class="text-center">Total libros</th>
                        <th class="text-center">Porcentaje</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $selBooks = ejecutarSQL::consultar("SELECT * FROM libro");
                    $totalAllBooks = 0;
                    while ($DAL = mysqli_fetch_array($selBooks)) {
                        $totalAllBooks = $totalAllBooks + $DAL['Existencias'];
                    }
                    $SelCat = ejecutarSQL::consultar("SELECT * FROM categoria ORDER BY CodigoCategoria ASC");
                    $bookCountP = 0;
                    while ($datCat = mysqli_fetch_array($SelCat)) {
                        $selBCat = ejecutarSQL::consultar("SELECT * FROM libro WHERE CodigoCategoria='" . $datCat['CodigoCategoria'] . "'");
                        $totalCatBooks = 0;
                        while ($DALC = mysqli_fetch_array($selBCat)) {
                            $totalCatBooks = $totalCatBooks + $DALC['Existencias'];
                        }
                        $TotalBPorcent = Cporcent($totalCatBooks, $totalAllBooks, 3);
                        $bookCountP = $bookCountP + $TotalBPorcent;
                        echo '<tr><td>' . $datCat['Nombre'] . '</td><td>' . $datCat['CodigoCategoria'] . '</td><td>' . $totalCatBooks . '</td><td>' . $TotalBPorcent . '%</td></tr>';
                        mysqli_free_result($selBCat);
                    }
                    mysqli_free_result($SelCat);
                    ?>
                    </tbody>
                    <tfoot>
                    <tr class="info">
                        <th class="text-center"></th>
                        <th class="text-center">Total libros</th>
                        <th class="text-center"><?php echo $totalAllBooks; ?></th>
                        <th class="text-center"><?php echo $bookCountP; ?>%</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <p class="lead text-center"><strong><i class="zmdi zmdi-info-outline"></i>&nbsp; ¡Importante!</strong> Para
                imprimir esta tabla ve a la sección de reportes y selecciona “Reporte Libros por Categoría”</p>
        </div>
    </div>
<?php
mysqli_free_result($selectallLoans);
mysqli_free_result($selectallLoans2);
mysqli_free_result($selectINS);
mysqli_free_result($selBooks);