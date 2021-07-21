<?php
	include '../../conexion/conexion.php';

    $Id_V = $_GET['IdUsuarios'];

    $query = "DELETE FROM usuarios WHERE IdUsuarios = $Id_V";

    for ($i=0; $i <=10 ; $i++) { 
    	$d = "DELETE FROM usutem WHERE IdUsuarios = $Id_V";
    	 mysqli_query($conexion, $d) or die (mysqli_error($conexion));

    }

    mysqli_query($conexion, $query) or die (mysqli_error($conexion));
    
    header("Location: ../view.php");
    mysqli_close($conexion);

?>