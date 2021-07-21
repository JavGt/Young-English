<?php 
	include './conexion.php';

	$Nom_V = $_POST['Nombre_C'];
	$Ema_V = $_POST['Email_C'];
	$Pas_V = $_POST['Password_C'];
	; //Total de lecciones

	$ver_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo='$Ema_V'");

	if (mysqli_num_rows ($ver_correo) >0 ) {
		echo '
			<script>
				alert("El correo que trata de ingresar es repertido, intente con otro");
				window.location="../login.php";
			</script>	
		';
	} else if($Nom_V != null){
		$query = "INSERT INTO usuarios values(NULL , '". $Nom_V."' ,'". $Ema_V."' , '". $Pas_V."','Usuario')";
		$ejecutar =mysqli_query($conexion, $query);

		$resultado = mysqli_query($conexion	, "SELECT * from usuarios where Correo = '$Ema_V'");
    	$data = mysqli_fetch_array($resultado,   MYSQLI_ASSOC);
    	$Nom_V = $data['IdUsuarios'];

		for ($i=1; $i <=10 ; $i++) { 
			$query = "INSERT INTO usutem values('".$Nom_V."', '".$i."', 'No Finalizada - 0% ' ,'0','0')";
			$ejecuta =mysqli_query($conexion, $query);

		}

		if($Nomb_V = 1){
			header("location: ../Login.php");
		}

	}

?>