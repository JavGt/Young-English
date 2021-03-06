<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Conjugation</title>
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
                        <div class="img5"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Se debe escoger el verbo correcto dependiendo si se habla de 1er o 3er persona</h5>

                            <div id="resultado"> </div>


                            <form name="Exercise" onsubmit="return verificar_conjugation()"  method="POST" >
                            <div class="co" >
                                <p>Michael ______ (be)  ill yesterday</p>

                                <select style="width: 200px;" name="p1" >
                                    <option></option>
                                    <option value="a" >Are</option>
                                    <option value="b" >Was</option>
                                    <option value="c" >Were </option>
                                </select>

                             <p>He _______ (be) in bed all day</p>
                            <select style="width: 200px;" name="p2">
                                <option></option>
                                <option value="a" >Was</option>
                                <option value="b" >Were</option>
                                <option value="c" >Been</option>

                            </select>

                             <p>He ______ (take) his medicine yesterday morning </p>
                            <select style="width: 200px;" name="p3">
                                <option></option>
                                <option value="a" >Take</option>
                                <option value="b" >Took</option>
                                <option value="c" >Token</option>
                            </select>

                             <p>Yesterday afternoon, a doctor _______ (go) to see him</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Go</option>
                                <option value="b" >Went</option>
                                <option value="c" >Gone</option>

                            </select>

                            <p>The doctor _____ (tell) him to stay in bed</p>
                            <select style="width: 200px;" name="p4">
                                <option></option>   
                                <option></option>
                                <option value="a" >Tell</option>
                                <option value="b" >Told</option>
                                <option value="c" >Telling</option>

                            </select>
                            <br><br>
                            </div>    
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                
                 <label class="t" ><h1>Conjugation</h1></label>

                <div  id="cont" style="width: 85%;height: 100%;background-color: #c4eac4;">
                     
            <p>En general, la conjugaci??n es la modificaci??n, m??s precisamente, la formaci??n de formas verbales (palabras de acci??n). Tambi??n tiene lugar en la gram??tica inglesa, aunque no con tanta intensidad como en otros idiomas, como el alem??n, por ejemplo. Por lo tanto, las formas verbales en ingl??s se pueden aprender con relativa facilidad</p>
            <p>La conjugaci??n es necesaria porque un verbo (si es el ??nico) no puede aparecer en su forma b??sica (que es la forma no conjugada) dentro de una oraci??n. Sin embargo, a veces puede parecerlo. En consecuencia, el verbo siempre debe coincidir con el sujeto en t??rminos de aspectos gramaticales espec??ficos, lo que significa estar de acuerdo con ??l (ver acuerdo) y ser modificado en consecuencia.</p>


            <h1>Regular</h1>           

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
                <td>Person (pronoun as the subject) </td>
                <td>Present simple</td>
                <td>Past simple (ed-form)</td>
                <td>Present participle (ing-form)
</td>
            </tr>

            <tr>
                <td>I (1st person singular)</td>
                <td>help</td>
                <td>helped</td>
                <td>helping</td>
            </tr>

            <tr>
                <td>I (3st person singular)</td>
                <td>helps</td>
                <td>helped</td>
                <td>helping</td>
            </tr>

            </table >

            </div>
        </div>
    </main>
    <script src="assets/js/operaciones.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>

</body>

</html>