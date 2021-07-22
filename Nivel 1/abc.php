<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Alphabet</title>
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
                <a style="text-decoration: none; color: white;" href="#modal" class="btn-open-popup">Exercise <img width="50px;" src="assets/img/ejer.png"></a><!--Boton de los ejercicios-->


                <div class="container-all" id="modal">
                    
                    <div class="popup">
                        <div class="img3"></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <h5>Responde de la manera correta</h5>

                            <div id="resultado"> </div>


            <form name="Exercise" onsubmit="return verificar_abcd()"  method="POST" >
                            <div class="co" >

                               <h5>1.- ¿A que letra corresponde la siguiente pronunciacion <strong>[ei]</strong></h5>
                               <input type="radio" name="p1" value="a" >A
                               <input type="radio" name="p1" value="b" >E
                               <input type="radio" name="p1" value="c" >No existe
                               <input type="radio" name="p1" value="d" >Z
                               <br><br>


                               <h5>1.- ¿A que letra corresponde la siguiente pronunciacion <strong>[ex]</strong></h5>  
                               <input type="radio" name="p2" value="a" >W
                               <input type="radio" name="p2" value="b" >S
                               <input type="radio" name="p2" value="c" >Ninguna de las anteriores
                               <input type="radio" name="p2" value="d" >Z
                               <br><br>


                               <h5>1.- ¿A que letra corresponde la siguiente pronunciacion <strong>[ti]</strong></h5>                               
                               <input type="radio" name="p3" value="a" >F
                               <input type="radio" name="p3" value="b" >V
                               <input type="radio" name="p3" value="c" >Ninguna de las anteriores
                               <input type="radio" name="p3" value="d" >T
                               <br><br>
                               

                               <h5>1.- ¿A que letra corresponde la siguiente pronunciacion <strong>[it]</strong></h5>                               
                               <input type="radio" name="p4" value="a" >W
                               <input type="radio" name="p4" value="b" >M
                               <input type="radio" name="p4" value="c" >No existe
                               <input type="radio" name="p4" value="d" >T
                               <br><br>

                            </div>
                            <input class="boton_enviar" type="submit" name="Verificar">

                            </form>

                        </div>
                        
                        <a href="#" class="btn-close-popup">X</a>
                    </div>
                    
                </div>
                <label class="t" >alphabet - Abecedario</label>
                
            <div class="conteiner" ><!--Texto o contenido de la pagina-->
                <br>    
                    <div class="main-menu" >

                        <script >
                            var sonido = new Audio();
                            sonido.src="./assets/audio/a.mp3";

                            var sonido1 = new Audio();
                            sonido1.src="./assets/audio/b.ogg";

                            var sonido2 = new Audio();
                            sonido2.src="./assets/audio/c.ogg";

                            var sonido3 = new Audio();
                            sonido3.src="./assets/audio/d.ogg";

                        </script>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/001-A.png"  >
                            <h2 style="color: black; " > A <br> Pronunciación: [ei] </h2>
                        </div>
                        </button>
                       <button style=" border:none;   background-color: transparent ;" onmousedown="sonido1.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/002-b.png"  >
                            <h2 style="color: black; "> B <br> Pronunciación: [bi] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido2.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/003-c.png"  >
                            <h2 style="color: black; " > C <br> Pronunciación: [ci]</h2>
                        </div>
                        </button>

                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido3.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/004-d.png"  >
                            <h2 style="color: black; " > D <br> Pronunciación: [di] </h2>
                        </div>
                        </button>

                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido4.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/005-e.png"  >
                            <h2 style="color: black; " > E <br> Pronunciación: [i] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido5.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/006-f.png"  >
                            <h2 style="color: black; " > F <br> Pronunciación: [ef] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido6.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/007-g.png"  >
                            <h2 style="color: black; " > G <br> Pronunciación: [yi] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/008-h.png"  >
                            <h2 style="color: black; " > H <br> Pronunciación: [eich] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/009-i.png"  >
                            <h2 style="color: black; " > I <br> Pronunciación: [ai] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/010-j.png"  >
                            <h2 style="color: black; " > J <br> Pronunciación: [jei] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/011-k.png"  >
                            <h2 style="color: black; " > K <br> Pronunciación: [kei] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/012-l.png"  >
                            <h2 style="color: black; " > L <br> Pronunciación: [el] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/013-m.png"  >
                            <h2 style="color: black; " > M <br> Pronunciación: [em] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/014-n.png"  >
                            <h2 style="color: black; " > N <br> Pronunciación: [en] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/015-o.png"  >
                            <h2 style="color: black; " > O <br> Pronunciación: [ou] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/016-p.png"  >
                            <h2 style="color: black; " > P <br> Pronunciación: [pi] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/017-q.png"  >
                            <h2 style="color: black; " > Q <br> Pronunciación: [kiu] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/018-r.png"  >
                            <h2 style="color: black; " > R <br> Pronunciación: [ar] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/019-s.png"  >
                            <h2 style="color: black; " > S <br> Pronunciación: [es] </h2>
                        </div>
                        </button>
                         <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/020-t.png"  >
                            <h2 style="color: black; " > T <br> Pronunciación: [ti] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/021-u.png"  >
                            <h2 style="color: black; " > U <br> Pronunciación: [iu] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/022-v.png"  >
                            <h2 style="color: black; " > V <br> Pronunciación: [uvi] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/023-w.png"  >
                            <h2 style="color: black; " > W <br> Pronunciación: [dabliu] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/024-x.png"  >
                            <h2 style="color: black; " > X <br> Pronunciación: [ex] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/025-y.png"  >
                            <h2 style="color: black; " > Y <br> Pronunciación: [uai] </h2>
                        </div>
                        </button>
                        <button style=" border:none;   background-color: transparent ;" onmousedown="sonido7.play()" >
                        <div class="option" style="background-color: white" >
                            <img src="./assets/img/png/026-z.png"  >
                            <h2 style="color: black; " > Z <br> Pronunciación: [set] </h2>
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