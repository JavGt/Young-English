<?php 
	include './conexion.php'; 
    $resultado = mysqli_query($conexion	, "SELECT * from usuarios where Correo = 'zazrb136@gmail.com'");
    $data = mysqli_fetch_array($resultado,   MYSQLI_ASSOC);
    echo  $data['Clave'];

    $Var= $data['Clave'];
    echo $Var;
                                    
                                   
                                  
?>