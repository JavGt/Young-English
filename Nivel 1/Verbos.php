<?php 
    session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Verbs</title>
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
<<<<<<< HEAD
                  

=======
                    
>>>>>>> bdb85d3d8759f7ac755b6a38b77525ae543e2771
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
                        <div class=""></div>
                        <div class="container-text">

                            <h1> <strong> Exercise / Ejercicio</strong></h1>
                            <div  id="cont" style="width: 325%;height: 150%;background-color: #c4eac4;">
                     
             <h1>Listado de cursos</h1>

              <table>
                <tr>
                  <td><strong>Infinitive</strong></td>
                  <td><strong>Past</strong></td>
                  <td><strong>Past Participle</strong></td>
                </tr>

                <tr>
                  <td>give</td>
                  <td>gave</td>
                  <td><input type="varchar" name="Verbo"></td>
                </tr>

                <tr>
                  <td>go</td>
                  <td><input type="varchar" name="Verbo"></td>
                  <td>gone</td>
                </tr>

                <tr>
                  <td>grow</td>
                  <td><input type="varchar" name="Verbo"></td>
                  <td><input type="varchar" name="Verbo"></td>
                </tr>

                <tr>
                  <td>have</td>
                  <td>had</td>
                  <td>had</td>
                </tr>

                <tr>
                  <td>hear</td>
                  <td><input type="varchar" name="Verbo"></td>
                  <td><input type="varchar" name="Verbo"></td>
                </tr>

                <tr>
                  <td>hide</td>
                  <td>hid</td>
                  <td></td>
                </tr>

                <tr>
                  <td>hit</td>
                  <td>hit</td>
                  <td><input type="varchar" name="Verbo"></td>
                </tr>

                <tr>
                  <td><input type="varchar" name="Verbo"></td>
                  <td>held</td>
                  <td>held</td>
                </tr>

                <tr>
                  <td>hurt</td>
                  <td>hurt</td>
                  <td>hurt</td>
                </tr>

                <tr>
                  <td>keep</td>
                  <td><input type="varchar" name="Verbo"></td>
                  <td></td>
                </tr>

                <tr>
                  <td>know</td>
                  <td>knew</td>
                  <td><input type="varchar" name="Verbo"></td>
                </tr>

              </table>

              <input type="submit" name="click aqui para guardar tu respuesta">

              <Br>Cambia al pasado los verbos entre paréntesis en las siguientes frases. Todos los verbos son irregulares</Br>

               <p>
              <ol>
                <li>I (go) <input type="text" name="irregulares"> to that new Chinese restaurant with my wife yesterday.</li>
                <li>We (drive) <input type="text" name="irregulares"> to France last summer because it (is) <input type="text" name="irregulares"> too expensive to fly.</li>
                <li>When we (get) <input type="text" name="irregulares"> to the restaurant, there (is) <input type="text" name="irregulares"> a table free. It (is) <input type="text" name="irregulares"> crowded.</li>
                <li>I (hear) <input type="text" name="irregulares"> about your mum the other day. Is she out of hospital yet?</li>
                <li>I'm really sorry but I (forget) <input type="text" name="irregulares"> to phone the school this morning.</li>
                <li>The mechanic (tell) <input type="text" name="irregulares"> us to come back in two hours.</li>
                <li>I (give) <input type="text" name="irregulares"> you 20 Euros, not 10.</li>
                <li>I (have) <input type="text" name="irregulares"> a lovely evening. Thank you for taking me out.</li>
                <li>......andthen the bastard (hit) <input type="text" name="irregulares"> me in the face and (run) <input type="text" name="irregulares"> away!</li>
                <li>I (grow) <input type="text" name="irregulares"> up in Madrid. What about you?</li>
              </ol>
            </p>

            <input type="submit" name="click aqui para guardar tu respuesta">
                
              <Br>Las siguientes frases contienen algún error. Escríbelas de nuevo correctamente corrigiendo los errores.</Br>

              <p>
              <ol>
                <li>Last night, Samantha have pizza for dinner.</li>
                <input type="text" name="oracion">
                <li>My cat was died last month.</li>
                <input type="text" name="oracion">
                <li>Yesterday I spend two hours cleaning my bedroom.</li>
                <input type="text" name="oracion">
                <li>How long have you know him?</li>
                <input type="text" name="oracion">
                <li>What was happened to your car?</li>
                <input type="text" name="oracion">
                <li>How much did you drank last night?</li>
                <input type="text" name="oracion">
                <li>It was so cold in Scotland that I catch a cold.</li>
                <input type="text" name="oracion">
                <li>No more food for me, thank you. I've eat too much.</li>
                <input type="text" name="oracion">
                <li>I fly to Barcelona last weekend.</li>
                <input type="text" name="oracion">
                <li>I'm not going to forgive you again. I've forgave you too many times already</li>
                <input type="text" name="oracion">
              </p>
              </ol>

              <input type="submit" name="click aqui para guardar tu respuesta">

            </div><

             </form>


               </div>
                     
                    <a href="#" class="btn-close-popup">X</a>
                </div>
                    
                </div>
                  <div  id="cont" style="width: 85%;height: 100%;background-color: #c4eac4;">
                     <h1>What are Verbs?</h1>    
            <p>Los verbos son palabras que expresan:</p>
            <ul >
               <li>Una accion fisica (e.g., "to swim," "to write," "to climb").</li>
               <li>Una accion mental(e.g., "to think," "to guess," "to consider").</li>
               <li>Algo que empezará (e.g., "to be," "to exist," "to appear").</li>
               <li> Deberás encontrarlo util para pensar en verbos como "hacen " las palabras.</li>
             </ul>   
            <p>Verbos expresando acciones fisicas</p>
            <p>Aqui hay algunas oraciones con verbos que expresan acciones fisicas. (en este ejemplo los verbos estan en comillas.)</p>
            <ul >
               <li>She "sells" pegs and lucky heather.</li>
               <li>The doctor "wrote" the prescription..</li>
               <li>Alison "bought" a ticket.</li>
             </ul> 
             <p>Verbos expresando acciones fisicas</p>
            <p>Mientras, muchos verbos expresan acciones fisicas (e.g., "a brincar," "a bailar," "a cantar"), los verbos tambien pueden expresar acciones mentales</p>
            <ul >
               <li>She considers the job done.</li>
               <li>Peter guessed the right number.</li>
               <li>I thought the same thing.</li>
             </ul> 

                
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