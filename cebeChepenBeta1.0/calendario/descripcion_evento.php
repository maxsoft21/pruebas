<?php
    //incluimos nuestro archivo config
    include '../library/configServer.php'; 

    // Incluimos nuestro archivo de funciones
    include 'funciones.php';

    // Obtenemos el id del evento
    $id  = evaluar($_GET['id']);

    // y lo buscamos en la base de dato
    $bd  = $conexion->query("SELECT * FROM eventos WHERE id=$id");

    // Obtenemos los datos
    $row = $bd->fetch_assoc();

    // titulo 
    $titulo=$row['title'];

    // cuerpo
    $evento=$row['body'];

    // Fecha inicio
    $inicio=$row['inicio_normal'];

    // Fecha Termino
    $final=$row['final_normal'];

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?=$titulo?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>
    h2
    {
    font-family: "Times New Roman", Georgia, Serif;
    text-transform: capitalize;
    }
    b
    {
        font-family: "Times New Roman", Georgia, Serif;
    }
    p
    {
        font-family: "Times New Roman", Georgia, Serif;
    }
    button
    {
       float: right;
       font-family: "Times New Roman", Georgia, Serif;
    }
</style>
<body>
     <center><h2><?=$titulo?></h2></center> 
     <hr>
     <p><b>Fecha Inicio: </b><?=$inicio?></p>
     <br>
     <p><b>Fecha Termino: </b><?=$final?></p>
     <br>
     <b>Descripcion</b>
     <br>
     <br>
     <p><?=$evento?></p>
     <br>
</body>
<form action="" method="post">
    <button type="submit" class="btn btn-danger" name="eliminar_evento"><i  class="zmdi zmdi-close"></i>Eliminar</button>
</form>
</html>
