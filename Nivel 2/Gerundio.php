<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gerund</title>
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
                        <div class="img7"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Escoge el verbo que está en paréntesis en gerundio o infinitivo</h5>

                            <div id="resultado"> </div>


                            <form name="Exercise" onsubmit="return verificar_gerund()"  method="POST" >
                            <div class="co" >
                                <p>They enjoy ______ (work) together?</p>

                                <select style="width: 200px;" name="p1" >
                                    <option></option>
                                    <option value="a" >Worked</option>
                                    <option value="b" >Works</option>
                                    <option value="c" >Working </option>
                                </select>

                             <p>David quit _______ (smoke) a year ago</p>
                            <select style="width: 200px;" name="p2">
                                <option></option>
                                <option value="a" >Smoking</option>
                                <option value="b" >Smoke</option>
                                <option value="c" >Smoked</option>

                            </select>

                             <p>Do you want _______ (study) with me tonight?</p>
                            <select style="width: 200px;" name="p3">
                                <option></option>
                                <option value="a" >Studing</option>
                                <option value="b" >Studied</option>
                                <option value="c" >Study</option>
                            </select>

                             <p>We were anxious _______ (take) the exam</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Toke</option>
                                <option value="b" >Taking</option>
                                <option value="c" >Token</option>

                            </select>

                            <p>He always takes a nap after _____ (eat) a big meal</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Ate</option>
                                <option value="b" >Eating</option>
                                <option value="c" >Eat</option>

                            </select>
                            <br><br>
                            </div>    
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                
                 <label class="t" ><h1>What is Gerund?</h1></label>

                <div  id="cont" style="width: 85%;height: 100%;background-color: #c4eac4;">
                     
            <p>El gerundio es un verbo que termina en -ing cuales son usados para formar verbos, y cuales en Ingles pueden tambien ser usados como adjetivo y  a sustantivo, por ejemplo, "Que estas haciendo"?</p>
            <p>Usando el Gerundio</p>
            <p>En español, el gerundio es una forma en la que los verbos que usualmente termina en -ando o -iendo y es usado para formar oraciones continuas</p>

            <table {
                        width=0%;
                        border= 1px solid #500;

                    }
                    th,td
                    {
                        width=25%;
                        text-aling: left;
                        vertical align=top;
                        border= 1px solid #000;
                        border-spacing:0;
                    }
            >

            <tr>
                <td>Estoy trabajando </td>
                <td>Im working</td>
            </tr>

            <tr>
                <td>Estamos comiendo</td>
                <td>We are eating</td>
            </tr>

            </table >

            <p>A continuacion les dejaremos unos ejemplo para completar la tabla usando gerundio</p>

            <table {
                        width=50%;
                        border= 1px solid #500;

                    }
                    th,td
                    {
                        width=25%;
                        text-aling: left;
                        vertical align=top;
                        border= 1px solid #000;
                        border-spacing:0;
                    }
            >

            <tr>
                <td>Estoy reparando mi auto</td>
                <td>Im fixing my car</td>
            </tr>

            <tr>
                <td>Estoy escribiendo una carta</td>
                <td>Im writting a letter</td>
            </tr>
            <tr>
                <td>Sigo cantando</td>
                <td>keep singing</td>
            </tr>
            <tr>
               <td>Sigo leyendo</td> 
               <td>keep reading</td>
            </tr>
            
            </table>

            </div>
        </div>
    </main>
    <script src="assets/js/operaciones.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>