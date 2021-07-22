<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Seasons Of The Year</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/estaciones.css">
    <link rel="stylesheet" href="assets/js/operaciones.js">
    <link rel="stylesheet" href="assets/css/moda_estaciones.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="background-color: #ffffff;">
   <nav class="navbar navbar-light navbar-expand-md sticky-top text-dark border-primary shadow-lg d-xl-flex justify-content-xl-start navbar-fixed-top navigation-clean-button" style="background-color: rgb(255,255,255);height: 70px;">

        <div class="container">
            <img width="100px" src="./assets/img/logo.png">
            <div style="width: 300px;">
                <a class="navbar-brand" id="logo" href="#">
                    <span style="font-family: Aclonica, sans-serif;color: #000000;margin-right: 30px;">Young English</span> 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navcol-1">
                <h6 class="d-xl-flex my-auto justify-content-xl-center align-items-xl-center" style="color: rgb(0,0,0);font-size: 20px;font-family: Acme, sans-serif;">
                    <i class="fa fa-home" style="padding-right: 20px;font-size: 18px;"></i>
                    <a href="../index/index.php">
                        <span style="font-family: ABeeZee, sans-serif;color: #000000;margin-right: 30px;font-size: 18px;">Home</span>
                    </a>
                </h6>

                <p class="d-xl-flex justify-content-xl-center align-items-xl-center navbar-text actions"
                    style="width: 700px;height: 63px;padding-left: 30px;">

                      <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: rgb(244,71,107);margin-right: 10px;margin-top: 0px;"> <a href="../Nivel 2/menu.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >SECOND LEVEL</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>

                   <!-- <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: rgb(244,71,107);margin-right: 50px;margin-top: 0px;"> <a href="../Nivel 3/menu.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >THIRD LEVEL</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>-->
                      <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: #F1C40F ;margin-right: 50px;margin-top: 0px;"> <a href="../conexion/cerrar_sesion.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >Cerrar Sesion</a> 
                    </button>
                </p>

            </div>
        </div>
    </nav>

    <main style="width: 100%;margin: auto;height: 100%;">


        <div class="d-flex contenido" id="contenido" style="background-color: rgb(255,255,255);width: 100%;max-width: 100%;">
              <div class="shadow-lg d-inline d-xl-flex flex-wrap justify-content-xl-start align-items-xl-center side-nav right open" id="nav" style="background-color: rgb(244,71,107);height: 100%;padding-top: 0px;width: 15%;">
                
                <ul class="nav nav-tabs">
                  

                    <li class="nav-item text-left d-inline-block" style="margin-bottom: 0px;">
                        <h1 class="text-center" style="font-family: Anton, sans-serif;color: rgb(255,255,255);padding-top: 50%;">&nbsp; FIRST LEVEL</h1>
                       
                        
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="abc.php" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Alphabet<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center"
                            href="colores.php" style="color: rgb(255,255,255);font-family: Nunito, sans-serif;font-size: 18px;">Colors<br>
                        </a>
                        <a
                            class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="numeros.php" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Numbers<br>
                        </a>
                         <a class="nav-link text-left d-inline-block d-xl-flex justify-content-xl-center" href="season.php" style="color: rgb(255,255,255);font-family: Nunito, sans-serif;font-size: 18px;">Seasons of the year<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="dates.php" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Months of the year<br>
                        </a>
                       
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="pro.php" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Pronouns<br>
                        </a>
                       
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="verbos.php" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Verbs<br>
                        </a>
                        
                    </li>
                </ul>
            </div>

            <div id="cont" style="width: 85%;height: 100%;background-color:#D6EAF8;">
                <a href="#modal" class="btn-open-popup"><img width="50px;" src="assets/img/ejer.png"></a><!--Boton de los ejercicios-->


                <div class="container-all" id="modal">
                    
                    <div class="popup">
                        <div class="img"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Coloca las estaciones correctas</h5>

                            <div id="resultado"> </div>


                            <form name="Exercise" onsubmit="return verificar_season()"  method="POST" >
                            <div style="text-align-last: center;" class="co" >
                                <p>1.- Que bonitos arboles- what beautiful trees </p>

                                <select style="width: 200px;" name="p1" >
                                    <option></option>
                                    <option value="a" >Apring</option>
                                    <option value="b" >Summer</option>
                                    <option value="c" >Fall</option>
                                    <option value="d" >Winter</option>
                                </select>

                             <p>2.- Hace mucho calor- It's raining a lot </p>
                            <select style="width: 200px;" name="p2">
                                <option></option>
                                <option value="a" >Apring</option>
                                <option value="b" >Summer</option>
                                <option value="c" >Fall</option>
                                <option value="d" >Winter</option>

                            </select>

                             <p>3.- Se están cayendo las hojas - the leaves are falling </p>
                            <select style="width: 200px;" name="p3">
                                <option></option>
                                <option value="a" >Apring</option>
                                <option value="b" >Summer</option>
                                <option value="c" >Fall</option>
                                <option value="d" >Winter</option>
                            </select>

                             <p>4.- Está nevando - It's snowing </p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Apring</option>
                                <option value="b" >Summer</option>
                                <option value="c" >Fall</option>
                                <option value="d" >Winter</option>

                            </select>
                            <br><br>
                            </div>    
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                <label class="t" >Seasons of the year</label>

                
                <div class="conteiner" >
                    <div class="box" >
                        <img  src="assets/img/1.jpg">
                        <span>Apring</span>
                    </div>
                    <div class="box" >
                        <img  src="assets/img/2.jpg">
                        <span>Summer</span>
                    </div>
                    <div class="box" >
                        <img  src="assets/img/3.jpg">
                        <span>Fall</span>
                    </div>
                    <div class="box" >
                        <img  src="assets/img/4.jpg">
                        <span>Winter </span>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="assets/js/operaciones.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>