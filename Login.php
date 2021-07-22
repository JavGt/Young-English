<?php
    
    session_start();
    if (isset($_SESSION['User'])) {
        echo '
        <script>
            window.location="./index/index.php"
        </script>
        ';
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="text/css" href="./assets/img/can.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="width: 100%; height: 70% ">
   
    <nav class="navbar navbar-light navbar-expand-md shadow-lg navigation-clean-search">
        <img  width="100px" src="./index/assets/img/logo.png">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#" style="font-family: Aclonica, sans-serif;font-size: 40px;">Young English</a>
        </div>
    </nav>
    
    <div class="border rounded shadow-lg d-block float-left d-xl-flex justify-content-xl-center align-items-xl-center form-container" style="width: 320px;background-color: #ffffff;margin: 0px;height: 438px;margin-top: 80px;margin-left: 20%;  ">

        <form method="POST" action="./conexion/agregar.php" >
            <h2 class="text-center"><strong>Create</strong> an account.</h2>
            <h4 class="text-center"><strong>Crear </strong> una cuenta.</h4>
            
            <div class="form-group"> 
                <input class="form-control" type="text" name="Nombre_C" placeholder="Usuario - User" required="" > 
            </div>

            <div class="form-group">
                <input class="form-control" type="email" name="Email_C" placeholder="Email - Correo" required="" >
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="Password_C" placeholder="Password - Contraseña" required="">
            </div>

            
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(244,71,107);">Sign Up</button>
            </div>
        </form>

    </div>

    <div class="login-clean" style="background-color: rgb(244,71,107);height: 100vh;">
        
        <form action="./conexion/ingresar.php" class="shadow-lg" method="post" style="margin-right: 20%;">
            <h2 class="sr-only">Login Form</h2>
            
            <div class="illustration">
                <i class="fa fa-users" style="color: #f4476b;"></i>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="Email_I" placeholder="Email - Correo ">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="Password_I" placeholder="Password - Contreseña ">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>