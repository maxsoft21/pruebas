<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header">
              <h1 class="all-tittles">realizar <small>préstamo</small></h1>
            </div>
            <p class="lead">
                Para realizar un préstamo llena los campos correspondientes a el usuario que realizara el préstamo del libro
            </p>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation"><a href="#loan2" aria-controls="profile" role="tab" data-toggle="tab">Préstamo Docente</a></li>
            </ul>
            <div class="tab-content" style="padding: 50px 0;">
                
                <div role="tabpanel" class="tab-pane fade" id="loan2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <form action="process/AddLoanUsers.php" method="post" class="form_SRCB" data-type-form="saveLoan" autocomplete="off"> 
                                <?php
                                    echo '<input type="hidden"  name="bookCode" value="'.$codeBook.'">';
                                    echo '<input type="hidden"  name="adminCode" value="'.$_SESSION['primaryKey'].'">';
                                    echo '<input type="hidden"  name="userType" value="'.$_SESSION['UserPrivilege'].'">';
                                    echo '<input type="hidden"  name="userLoan" value="Teacher">';
                                ?>
                                <div class="group-material">
                                    <span>Código correlativo</span>
                                    <select class="tooltips-general material-control" name="bookCorrelative" data-toggle="tooltip" data-placement="top" title="Elige el código correlativo del libro">
                                        <?php
                                            for($c=1;$c<=$fila['Existencias'];$c++){
                                                if($c>=100){
                                                   $correl=substr($fila['CodigoCorrelativo'], 0, -2);
                                                   $correlativo=$fila['CodigoInfraestructura']."-".$fila['CodigoCategoria']."-".$correl.$c;
                                                   echo '<option value="'.$correlativo.'">'.$correlativo.'</option>';
                                                }elseif($c>=10){
                                                   $correl=substr($fila['CodigoCorrelativo'], 0, -1);
                                                   $correlativo=$fila['CodigoInfraestructura']."-".$fila['CodigoCategoria']."-".$correl.$c;
                                                   echo '<option value="'.$correlativo.'">'.$correlativo.'</option>';
                                                }elseif($c<10){
                                                   $correlativo=$fila['CodigoInfraestructura']."-".$fila['CodigoCategoria']."-".$fila['CodigoCorrelativo'].$c;
                                                   echo '<option value="'.$correlativo.'">'.$correlativo.'</option>'; 
                                                }
                                            }
                                        ?>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="group-material">
                                    <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el número de DNI del docente" name="userDni" pattern="[0-9-]{1,10}" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente números, 8 dígitos">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Número de DNI</label>
                                </div>
                                <div class="group-material">
                                    <span>Fecha de solicitud</span>
                                    <input type="text" readonly class="material-control StarCalendarInput" data-input="adminTeacher" required="" name="startDate" placeholder="Fecha de solicitud">
                                </div>
                                <div class="group-material">
                                    <span>Fecha de entrega</span>
                                    <input type="text" readonly class="material-control EndCalendarInput material-input-disabled" id="inputEnd-adminTeacher" required="" name="endDate" placeholder="Primero debes seleccionar la fecha de solicitud">
                                </div>
                                <p class="text-center">
                                    <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                    <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Realizar préstamo</button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>