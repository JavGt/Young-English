<?php
    session_start();
    	include '../conexion/conexion.php';

        if (!isset($_SESSION['User'])) {
        echo '
            <script>
                alert("por favor, inicia sesion");
                window.location ="../Login.php"
            </script>
        ';
        session_destroy();
        die();  
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <link rel="icon" type="text/css" href="./assets/img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Calificaciones</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
        <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
        <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
        <link rel="stylesheet" href="../Nivel 1/assets/css/styles.min.css">
        <link rel="stylesheet" href="../Nivel 1/assets/fonts/font-awesome.min.css">



</head>
<body style="background-color: #E0FFFF  " >
	<nav class="navbar navbar-light navbar-expand-md shadow-lg navigation-clean-search">
            <img  width="100px" src="./assets/img/logo.png">

             <label style="width: 600px;  padding-top: 10px; height: 50px;color: white;  background-color: #0a80fe; border-radius: 20px 20px 20px 0px; text-align: center; font-size: 20px; " >Welcome  <strong> <?php echo $_SESSION['User']['Nombre'] ?></strong></label>   

            <div class="container">
                <a class="navbar-brand mx-auto" href="#" style="font-family: Aclonica, sans-serif;font-size: 40px;">Young English</a>
            </div>


            <div class="collapse navbar-collapse" id="navcol-1">
               

                <p class="d-xl-flex justify-content-xl-center align-items-xl-center navbar-text actions"
                    style="width: 700px;height: 63px;padding-left: 30px;">

                    
                 
                    <i class="fa fa-home" style="padding-right: 20px;font-size: 18px;"></i>
                    <a href="../index/index.php">
                        <span style="font-family: ABeeZee, sans-serif;color: #000000;margin-right: 30px;font-size: 18px;">Home</span>
                    </a>
               
                     <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: #F1C40F;margin-right: 50px;margin-top: 0px;"> <a href="../conexion/cerrar_sesion.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >Cerrar Sesion</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px; "></i>
                    </button>
                </p>

            </div>
        </nav>

        
        <table class="table table-hover" style="background-color: white; margin: 3%; border-radius: 40px; width: 90% ">
  <thead>
    <tr>
        <th scope="col">Leccion</th>
        <th scope="col">Nombre</th>
        <th scope="col">Estatus</th>
        <th scope="col">Calificación Obtenida</th>
        <th scope="col">Calificación Requerida</th>
    </tr>
  </thead>
  <tbody>
     <?php

        $query = "SELECT temas.leccion , usutem.estatus , usutem.calopt , usutem.calTot from temas inner join usutem on temas.IdTemas =  usutem.IdTemas;";
        $resultado = mysqli_query($conexion, $query);
        
        $count = 0;
        
        while( $data = mysqli_fetch_array($resultado,   MYSQLI_ASSOC)){
            echo '
                <tr>
                    <th scope="row">'.++$count.'</th>
                    <td>'.$data['leccion'].' </td>
                    <td>'.$data['estatus'].' </td>
                    <td>'.$data['calopt'].' </td>
                    <td>'.$data['calTot'].' </td>
                    
                </tr>
            ';
        }//end while*/
       
        mysqli_close($conexion);
    ?>
  </tbody>
</table>


</body>
</html>