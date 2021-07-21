<?php 
    session_start();

	include './conexion.php';

	$Ema_V = $_POST['Email_I'];
	$Pas_V = $_POST['Password_I'];

    $resultado = mysqli_query($conexion	, "SELECT * from usuarios where Correo = '$Ema_V'");
    $data = mysqli_fetch_array($resultado,   MYSQLI_ASSOC);
    $Nom_V = $data['Nombre'];
    $Tipo_V = $data['Tipo_User'];
    $IdUser = $data['IdUsuarios'];

	$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Ema_V' and Clave='$Pas_V'"); //hace una consulta a la base de datos 

	if ( mysqli_num_rows($consulta) > 0 ){
		$_SESSION['User'] = array();
		$_SESSION['User']['IdUsuarios'] = $IdUser;
		$_SESSION['User']['Correo']= $Ema_V;
		$_SESSION['User']['Nombre'] = $Nom_V;
		$_SESSION['User']['Tipo_User'] = $Tipo_V;

		if ($Tipo_V==='Usuario') {
			echo '<script>window.location="../index/index.php"</script>';	
			exit();
		}else if ($Tipo_V==='Profesor') {
			# code...
		}{
			echo '<script>window.location="../maestro/view.php"</script>';	
		exit();
		}
		
	}else {
		echo '<script>
				alert("No esta registrado");
				window.location = "../Login.php"
			</script>';
		exit();
	}

?>