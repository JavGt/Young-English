<?php 
	$conexion= mysqli_connect("localhost", "root", "", "young-english"); //conexio tipo procedural

	$v1= $_POST['V1'];

	$query = "UPDATE usutem set IdUsuarios='23' , Estatus='10%' , CalOpt='3', CalTot='4'   WHERE IdTemas='2'";
	$ejecutar =mysqli_query($conexion, $query);
	
	

 ?>


