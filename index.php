<?php
include("lib/constantes.php");


if (isset($_SESSION["Usuario"])){
    header("location:".URLBASE."controladores/AccUsuario.php");
    exit;
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    
        <meta charset="UTF-8">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        
      
    </head>
<style>
    body {
    background-image: url("http://18.188.51.176/wp-content/uploads/2019/01/15102113_isolated-1188036_1920.png");

    /* Full height */
     height: 300%; 

    /* Center and scale the image nicely */
     background-position: left top ;
    background-repeat: no-repeat;
     background-size: cover;
    
    }
</style>  
<div class="container">
    
        <div id="login-row" class="row justify-content-end align-items-end">
            
            <div id="login-column" class="col-md-50">
                
            
                
                
                <div class="box">
                   <p class="login-msg-above"> <div><img src="../AgendaMedica/img/logo.png" width="500" height="125"/></div></p>
                <br> 

                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form id="loginform" name="loginform" class="form" method="POST" action="<?=URLBASE?>controladores/AccUsuario.php">
                            <div class="form-group">
                                <label for="username" class="text-white">Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Ingresar" href="<?=URLBASE?>controladores/AccUsuario.php">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
