<?php
    session_start();
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
    }else if (  $_SESSION['User']['Tipo_User'] ==='Profesor') {
         echo '
            <script>
                window.location ="../maestro/view.php"
            </script>
        ';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="text/css" href="./assets/img/logo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Young English</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
        <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
        <link rel="stylesheet" href="assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
        <link rel="stylesheet" href="../Nivel 1/assets/css/styles.min.css">
        <style type="text/css">
            
            body{
                    width: 100%;
    height: 100vh;
    color: #fff;
    background: linear-gradient(-45deg, #F9E79F,#2E86C1,#D2B4DE,#CB4335);
    background-size: 400% 400%;
    position: relative;
    animation: change 10s ease-in-out infinite;
            }
            @keyframes change{
    0%{
        background-position: 0 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0 50%;
    }
}
        </style>


    </head>

    <body  >
        
        <nav class="navbar navbar-light navbar-expand-md shadow-lg navigation-clean-search">
            <img  width="100px" src="./assets/img/logo.png">

             <label style="width: 600px;  padding-top: 10px; height: 50px;color: white;  background-color: #0a80fe; border-radius: 20px 20px 20px 0px; text-align: center; font-size: 20px; " >Welcome  <strong> <?php echo $_SESSION['User']['Nombre'] ?></strong></label>   

            <div class="container">
                <a class="navbar-brand mx-auto" href="#" style="font-family: Aclonica, sans-serif;font-size: 40px;">Young English</a>
            </div>


            <div class="collapse navbar-collapse" id="navcol-1">
               

                <p class="d-xl-flex justify-content-xl-center align-items-xl-center navbar-text actions"
                    style="width: 700px;height: 63px;padding-left: 30px;">

                    

                    <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: #138D75; margin-right: 50px;margin-top: 0px;"> <a href="./Calificaciones.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >Calificaciones</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>
                     <button  class="btn btn-light btn-block text-uppercase text-center shadow-sm d-xl-flex justify-content-xl-center action-button" type="button" style="background-color: #F1C40F;margin-right: 50px;margin-top: 0px;"> <a href="../conexion/cerrar_sesion.php" style="font-family: ABeeZee, sans-serif;  color: white; text-decoration: none;" >Cerrar sesión</a> <i class="fa fa-play d-xl-flex justify-content-xl-center align-items-xl-center" style="padding-right: 20px;font-size: 16px;margin-left: 10px;margin-top: 3px;"></i>
                    </button>
                </p>

            </div>

            

        </nav>

        <div class="blog-slider" style="margin-top: 50px;">
            <div class="blog-slider__wrp swiper-wrapper">

                <div class="blog-slider__item swiper-slide">
                     <div class="blog-slider__img">
                        <img src="assets/img/undraw_education_f8ru.png">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">UPTx</span>
                        <div class="blog-slider__title">FIRST LEVEL 'NENI' </div>
                        <div class="blog-slider__text">¿Aburrido de no saber los colores, abecedario o fechas en inglés? Anda, da clic para comenzar en <strong>PLAY</strong></div>
                        <button style="border-radius: 10px; background-color: #fd3838; border:none;     box-shadow: 10px 10px 0px  0px #46a2fd, 30px 30px 14px #acd5fd; " class="bo" ><a  style="text-decoration:none; color: white;" href="../nivel 1/menu.php">START / PLAY </a></button>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="assets/img/undraw_teaching_f1cm.png">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">UPTx</span>
                        <div class="blog-slider__title">SECOND LEVEL 'PRO' </div>
                        <div class="blog-slider__text">No le tengas miedo al éxito, comienza a aprender inglés en Young English, da clic en <strong>START</strong> para continuar</div>
                        <button style="border-radius: 10px; background-color: #fd3838; border:none;     box-shadow: 10px 10px 0px  0px #46a2fd, 30px 30px 14px #acd5fd; " class="bo" ><a  style="text-decoration:none; color: white;" href="../nivel 2/menu.php">START / PLAY </a></button>
                    </div>
                </div>

                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="assets/img/undraw_Graduation_ktn0.png">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">UPTx</span>
                        <div class="blog-slider__title">THIRD LEVEL 'MASTER CHIEF' </div>
                        <div class="blog-slider__text"> <strong>WHAT? HOW? </strong> Estas a punto de terminar. Adelante, sigue para poder concluir. </div>
                        <button style="border-radius: 10px; background-color: #fd3838; border:none;     box-shadow: 10px 10px 0px  0px #46a2fd, 30px 30px 14px #acd5fd; " class="bo" ><a  style="text-decoration:none; color: white;" href="../nivel 3/menu.php">START / PLAY </a></button>
                    </div>
                </div>

                <div class="blog-slider__pagination"></div>
            </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
        
    </body>

</html>