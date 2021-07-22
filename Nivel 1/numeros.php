
<?php 
    session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Numbers</title>
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
    <link rel="stylesheet" href="assets/js/operaciones.js">
    <link rel="stylesheet" href="assets/css/moda_estaciones.css">

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

                    <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: rgb(244,71,107);margin-right: 50px;margin-top: 0px;"> <a href="../Nivel 3/menu.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >THIRD LEVEL</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>
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

            <div id="cont" style="background-color:#D6EAF8; width: 85%; ">
                <a href="#modal" class="btn-open-popup"><img width="50px;" src="assets/img/ejer.png"></a><!--Boton de los ejercicios-->


                <div class="container-all" id="modal">
                    
                    <div class="popup">
                        <div class="img4"></div>
                        <div class="container-text">

                            <h1> <strong> Ejercicio - Exercise</strong></h1>
                            <h5>Responde de manera correcta</h5>

                            <div id="resultado"> </div>

                            <form name="Exercise" onsubmit="return verificar_colors()"  method="POST" >
                            
                            <div class="co">

                               <h5>1.- ¿Cuanto es sixty-four / Four? <img width="30px" src="assets/img/divi.png"></h5>
                               <input type="radio" name="P1" value="a" >1
                               <input type="radio" name="P1" value="b" >sixty
                               <input type="radio" name="P1" value="c" >60
                               <input type="radio" name="P1" value="d" >16
                               <br><br>

                               <h5>1.- ¿Cuanto es Ten - ONE? <img width="30px" src="assets/img/menos.png"></h5>
                               <input type="radio" name="P1" value="a" >1
                               <input type="radio" name="P1" value="b" >sixty
                               <input type="radio" name="P1" value="c" >60
                               <input type="radio" name="P1" value="d" >16
                               <br><br>

                               <h5>1.- ¿Cuanto es Five * Five? <img width="30px" src="assets/img/por.png"></h5>
                              <input type="radio" name="P1" value="a" > twenty-five
                               <input type="radio" name="P1" value="b" >four
                               <input type="radio" name="P1" value="c" >66
                               <input type="radio" name="P1" value="d" >20
                               <br><br>
                               
                               <h5>1.- ¿Cuanto es Fifty + 40? <img width="30px" src="assets/img/mas.png"></h5>
                               <input type="radio" name="P4" value="a" >Forty - five
                               <input type="radio" name="P4" value="b" >91
                               <input type="radio" name="P4" value="c" >Ninety
                               <input type="radio" name="P4" value="d" > fifty

                            </div>
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                <label class="t" >Numbers - Numeros</label>
                
            <div class="conteiner" ><!--Texto o contenido de la pagina-->

                    <div class="main-menu" >

                        <div class="option" style="background-color: #BA4A00;   width: 100% " >
                                <h2 style="color: white; " > -Apartit del <strong>17</strong> los numeros cardinales se unen con las decenas correspondientes <br>
                                <strong>Decenas:</strong>
                                10.- Ten
                                20.-Twenty
                                30.-Thirty
                                40.-Forty
                                50.-fifty
                                60.-Sixty
                                70.-Seventy
                                80.-eigthy 
                                90.-ninety
                                <br><hr>
                                Ejemplos - Examples: <br>
                                28.- <strong>Twenty</strong>-eight <br>
                                54.- <strong>Fifty</strong>-four <br>
                                35.- <strong>Thirty</strong>-five <br>
                                </h2>
                            </div>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/028-1.png"  >
                                <h2 style="color: black; " > ONE</h2>
                            </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/029-2.png"  >
                                <h2 style="color: black; " > TWO</h2>
                            </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/030-3.png"  >
                                <h2 style="color: black; " > THRE</h2>
                            </div>
                        </button>
                           
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/031-4.png"  >
                                <h2 style="color: black; " > FOUR</h2>
                            </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/032-5.png"  >
                                <h2 style="color: black; " > FIVE</h2>
                            </div>
                        </button>
                           <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/033-6.png"  >
                                <h2 style="color: black; " > SIX</h2>
                            </div>
                        </button>
                           <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/034-7.png"  >
                                <h2 style="color: black; " > SEVEN</h2>
                            </div>
                               <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/035-8.png"  >
                                <h2 style="color: black; " > EIGHT</h2>
                            </div>
                        </button>
                           <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                            <div class="option" style="background-color: white" >
                                <img src="./assets/img/png/036-9.png"  >
                                <h2 style="color: black; " > NINE</h2>
                            </div>
                        </button>
                     
                        
                

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