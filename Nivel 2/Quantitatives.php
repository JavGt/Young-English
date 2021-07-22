<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Quantitative</title>
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
</head>

<body style="background-color: #ffffff;">
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
                        <div class="img6"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Escoge el adjetivo correcto</h5>

                            <div id="resultado"> </div>


                            <form name="Exercise" onsubmit="return verificar_quantitatives()"  method="POST" >
                            <div class="co" >
                                <p>There are not ____ options.</p>

                                <select style="width: 200px;" name="p1" >
                                    <option></option>
                                    <option value="a" >Much</option>
                                    <option value="b" >Many</option>
                                    <option value="c" >Some</option>
                                    <option value="d" >Few</option>
                                </select>

                             <p>How ____ money do you have?</p>
                            <select style="width: 200px;" name="p2">
                                <option></option>
                                <option value="a" >Much</option>
                                <option value="b" >Many</option>
                                <option value="c" >Some</option>
                                <option value="d" >Any</option>

                            </select>

                             <p>There is ____ butter in the fridge.</p>
                            <select style="width: 200px;" name="p3">
                                <option></option>
                                <option value="a" >Few</option>
                                <option value="b" >Many</option>
                                <option value="c" >Some</option>
                                <option value="d" >Any</option>
                            </select>

                             <p>We don't have ____ time.</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Many</option>
                                <option value="b" >Some</option>
                                <option value="c" >A little</option>
                                <option value="d" >Much</option>

                            </select>

                            <p>Do you have ____ milk?</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Many</option>
                                <option value="b" >Any</option>
                                <option value="c" >A few</option>
                                <option value="d" >Some</option>

                            </select>
                            <br><br>
                            </div>    
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                
                 <label class="t" ><h1>Quantitative</h1></label>

                <div  id="cont" style="width: 85%;height: 100%;background-color: #c4eac4;">
             
                    <h1>Adjetivos contables</h1>         
                        <p>Responden a la pregunta "How many? / ¿Cuántos (as)?" y se usan para expresar la cantidad de un sustantivo que puede ser contado por unidad. Algunos de éstos son</p>
                        <ol type="A">
                            <li>None of / Ninguno de...
                            <li>Few / Pocos (as)</li>
                            <li>Fewer / Menos</li>
                            <li>A few / Algunos (as)</li>
                            <li>A small quantity of / Una pequeña cantidad de...</li>
                            <li>A couple of / Un par de...</li>
                            <li>Several / Varios (as)</li>
                            <li>Many - A lot of / Muchos (as)</li>
                            <li>More / Más</li>
                            <li>A large number of / Un gran número de...</li>
                            <li>A large quantity of / Una gran cantidad de...</li>
                            <li>Plenty of / Gran cantidad de...</li>
                            <li>Most of / La mayoría de...</li>
                            <li>Lots of / Montones de...</li>        
                        </ol>

                    <h1>Adjetivos no contables</h1>
                    <p>Este tipo de adjetivos responden a la pregunta "how much? / ¿cuánto(a)?", y expresan cantidades que no pueden contarse por unidad, como los líquidos, por ejemplo:</p>
                        <ol type="A">    
                            <li>None of / Nada de...</li> 
                            <li>Little / Poco</li> 
                            <li>A little / Un poco</li> 
                            <li>Less / Menos</li> 
                            <li>Some / Algo de...</li> 
                            <li>Not much / No mucho</li> 
                            <li>Enough / Suficiente</li> 
                            <li>The rest of / El resto de...</li> 
                            <li>More / Más</li> 
                            <li>An amount of - A quantity of / Una cantidad de...</li> 
                            <li>A great deal of / Una gran cantidad de...</li> 
                            <li>Plenty of / Un montón de... - Mucho de...</li> 
                            <li>A lot of / Mucho - Demasiado</li> 
                        </ol>
           

            </div>
        </div>
    </main>
    <script src="assets/js/operaciones.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>