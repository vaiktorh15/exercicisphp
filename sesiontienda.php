<?php
session_start();
if (isset($_SESSION["username"])){
    header('location:index.php');
    
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="tiendas.css">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">


    <title>Botiga Víctor</title>
  </head>
  <body>
    <!-- menu superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="/dist/tienda.php">Inici <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </nav>
        </div>
    </div>
    </nav>
    <!-- /menu superior -->

    <div class="container">
        <!-- alertas 
        1 login usuario incorrecto
        2 sesion destruida -->
        <?php
    if (isset($_GET['m'])){
        switch($_GET['m']){
            case 1:?>
            <div class="alert alert-danger" role="alert">
                Nombre de usuario o contraseña incorrecta
            </div> <?php
            break;
            case 2:
            ?>
            <div class="alert alert-success" role="alert">
                La sesion ha sido destruiiiida
            </div> 
            <?php
            break;
        }
    }?>
    <!--/alertas -->
    
    <header>
        <h1>Inicia sessió V-E-S</h1>
    </header>
    

    <!-- formulario login -->
    <form class="form-inline" action="validarLogin.php">
       <h3>usuari:</h3> <input type="user" class="form-control" name="username" id="username">
       <h3>contrasenya:</h3><input type="password" class="form-control" name="password" id="password">  
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Inicia sessió</button>
    </form>
    <!-- /formulario login -->
        </div>
    </div>
    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>