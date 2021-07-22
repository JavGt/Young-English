<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Domestic objects</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/estilo_menu.css">
</head>

<body style="background-color: #F9E79F;">
    <nav class="navbar navbar-light navbar-expand-md sticky-top text-dark border-primary shadow-lg d-xl-flex justify-content-xl-start navbar-fixed-top navigation-clean-button" style="background-color: rgb(255,255,255);height: 70px;">
    
        <div class="container">
            <img width="100px" src="./assets/img/log.png">
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

                      <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: rgb(244,71,107);margin-right: 50px;margin-top: 0px;"> <a href="../Nivel 1/menu.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >FIRST LEVEL</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>

                    <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: rgb(244,71,107);margin-right: 50px;margin-top: 0px;"> <a href="../Nivel 3/menu.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >THIRD LEVEL</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
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
                        <a class="nav-link text-left d-inline-block d-xl-flex justify-content-xl-center" href="#" style="color: rgb(255,255,255);font-family: Nunito, sans-serif;font-size: 18px;">Cymbals<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center"
                            href="#" style="color: rgb(255,255,255);font-family: Nunito, sans-serif;font-size: 18px;">Body parts<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="#" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Conjugation<br>
                        </a>
                        <a
                            class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="#" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Gerund<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="#" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Quantitative<br>
                        </a>
                        <a class="nav-link text-center d-inline-block d-xl-flex justify-content-xl-center" href="#" style="color: rgb(255,255,255);font-size: 18px;font-family: Nunito, sans-serif;">Past participe<br>
                        </a>
                    </li>
                </ul>
            </div>

             <div id="cont" style="width: 85%;height: 100%;background-color:#D6EAF8;">
                <a href="#modal" class="btn-open-popup"><img width="50px;" src="assets/img/ejer.png"></a><!--Boton de los ejercicios-->


                <div class="container-all" id="modal">
                    
                    <div class="popup">
                        <div class="img3"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Se debe escoger la palabra adecuada dependiendo de la situacion</h5>

                            <div id="resultado"> </div>


                            <form name="Exercise" onsubmit="return verificar_domestics()"  method="POST" >
                            <div class="co" >
                                <p>Pasas de 6 a 8 horas aqui</p>

                                <select style="width: 200px;" name="p1" >
                                    <option></option>
                                    <option value="a" >Bed</option>
                                    <option value="b" >Chair</option>
                                    <option value="c" >Coach</option>
                                </select>

                             <p>Area de trabajo y tareas</p>
                            <select style="width: 200px;" name="p2">
                                <option></option>
                                <option value="a" >Wardrobe</option>
                                <option value="b" >Desk</option>
                                <option value="c" >Cooker</option>

                            </select>

                             <p>Donde se preparan los alimentos</p>
                            <select style="width: 200px;" name="p3">
                                <option></option>
                                <option value="a" >Bunk beds</option>
                                <option value="b" >Cooker</option>
                                <option value="c" >Shower</option>
                            </select>

                             <p>Lugar donde te lavas los dientes</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Oven</option>
                                <option value="b" >Table</option>
                                <option value="c" >Sink</option>

                            </select>

                            <p>Lugar donde se desayuna</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Table</option>
                                <option value="b" >Refrigerator</option>
                                <option value="c" >Bedside table</option>

                            </select>
                            <br><br>
                            </div>    
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
    <main class="menu" >

        <label class="t" ><h1>Domestic objects</h1></label>

        <div class="main-menu" >
            
            <a href="">
                <div class="option" >
                    <img src="./assets/img/cama.png">
                    <h2>Bed </h2>
                </div>
            </a>
                 <a href="">
                <div class="option" >
                    <img src="./assets/img/litera.png">
                    <h2>Bunk beds</h2>
                </div>
            </a>
                 <a href="">
                <div class="option" >
                    <img src="./assets/img/mesita-de-noche.png">
                    <h2>Bedside table</h2>
                </div>
            </a>
                 <a href="">
                <div class="option" >
                    <img src="./assets/img/espacio-de-trabajo.png"> 
                    <h2>desk</h2>
                </div>
            </a>
                 <a href="">
                <div class="option" >
                    <img src="./assets/img/armario.png">
                    <h2>wardrobe</h2>
                </div>
            </a>
                 <a href="">
                <div class="option" >
                    <img src="./assets/img/tocador.png">
                    <h2>dressing table</h2>
                </div>
            </a>       
                
                <a href="">
                <div class="option" >
                    <img src="./assets/img/sillon.png">
                    <h2>Airchair</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/silla.png">
                    <h2>Chair</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/sofa.png">
                    <h2>Couch</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/chimenea.png">
                    <h2>Fireplace</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/cena.png">
                    <h2>Table</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/toallero.png">
                    <h2>Shower tall</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/banera.png">
                    <h2>Bathtub</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/lavado-de-manos.png">
                    <h2>Sink</h2>
                </div>
            </a>    
            <a href="">
                <div class="option" >
                    <img src="./assets/img/inodoro.png">
                    <h2>Toilet</h2>
                </div>
            </a>  
            <a href="">
                <div class="option" >
                    <img src="./assets/img/ducha.png">
                    <h2>Shower</h2>
                </div>
            </a>
            <a href="">
                <div class="option" >
                    <img src="./assets/img/despensa.png">
                    <h2>Cupboard</h2>
                </div>
            </a>
            <a href="">
                <div class="option" >
                    <img src="./assets/img/refrigerador.png">
                    <h2>Refrigerator</h2>
                </div>
            </a>
            <a href="">
                <div class="option" >
                    <img src="./assets/img/estufa.png">
                    <h2>Cooker</h2>
                </div>
            </a>
            <a href="">
                <div class="option" >
                    <img src="./assets/img/horno.png">
                    <h2>Oven</h2>
                </div>
            </a>    

        </div>
    </main>

   
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>