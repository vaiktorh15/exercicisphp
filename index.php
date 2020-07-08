<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Botiga Online Víctor</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
      <link rel="stylesheet" href="tiendas2.css">
      <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
  <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
    
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="../dist/tienda.php">Inici <span class="sr-only">(current)</span></a>
        </li>
        </ul>
            <ul>
            <li class="navbar-text">
            <a href="http://localhost/exercicisphp-1/cistella.php">Comanda</a>
            </li>
            </ul>
                <ul>
                <li class="navbar-text">
                <a href="http://localhost/exercicisphp-1/sesiontienda.php.">Iniciar sessió</a>
                </li>
                </ul>

                    <ul>
                    <li class="navbar-text">
                    <a href="logouttienda.php">Tancar sessió</a>
                    </li>
                    </ul>
    </nav>

<form action="http://localhost/exercicisphp-1/cistella.php" method="get">

           <header>
            <h1>Víctor's electronic shop</h1>
          </header>
            
          <br>


<h2>Benvingut! Aquí podràs comprar els següents productes:</h2>
<section>


<?php

        $cascos = 70;
        $monitor = 135;
        $wacom = 90;
        $pendrive = 16;
        $impressora = 48;
        $ratoli = 7;
        $teclat = 10;
        $portatil = 580;
        $grafica = 197;
        $processador = 210;
        $font = 35;

?>

<!-- cascos -->
              <div class="row">
                <div class="col-4 cascos"><img src="imatges/cascos.jpg" alt="cascos">
                  <p>Cascos Gaming-70 euros 
                  <input type="number" name="item[1]" min="0" max="5" value="0" >
                  <input type="hidden" name="preu[item1]" value=<?=$cascos?>
                  >
              </div>

<!-- monitor -->
            <div class="col-4 monitor">
              <img src="imatges/1.jpg" alt="monitor">
              <p>Monitor de 24 pulgadas 144hz-135 euros 
              <input type="number" name="item[2]" min="0" max="5" value="0">
              <input type="hidden" name="preu[item2]" value=<?=$monitor?> >
            </div>
            
<!--wacom-->
            <div class="col-4 tablet">
              <img src="imatges/wacom.jpg" alt="wacom tablet">
              <p>Wacom Tablet-90 euros 
              <input type="number" name="item[3]" min="0" max="5" value="0">
              <input type="hidden" name="preu[item3]" value=<?=$wacom?>>
            </div>

<!--pendrive-->
          <div class="col-4 pendrive">
              <img src="imatges/pen.jpg" alt="pendrive">
            <p>Pendrive 128 GB-16 euros 
              <input type="number" name="item[4]" min="0" max="5" value="0">
              <input type="hidden" name="preu[item4]" value=<?=$pendrive?>>
          </div>

<!--impressora-->
          <div class="col-4 impresora">
              <img src="imatges/impresora.jpg" alt="impresora">
            <p>Impressora-48 euros 
              <input type="number" name="item[5]"min="0" max="5" value="0">
              <input type="hidden" name="preu[item5]" value=<?=$impressora?>>
          </div>

<!--Ratolí-->
            <div class="col-4 raton">
              <img src="imatges/raton.jpg" alt="ratón">
              <p><span class="preu"><?=$ratoli?>Ratolí USB-7 euros
                <input type="number" name="item[6]" min="0" max="5" value="0">
                <input type="hidden" name="preu[item6]" value=<?=$ratoli?>>
            </div>
            
            
<!--teclat-->
            <div class="col-4 teclado">
                <img src="imatges/teclado.jpg" alt="teclado">
                <p>Teclat Logitech-10 euros 
              <input type="number" name="item[7]" min="0" max="5" value="0">
              <input type="hidden" name="preu[item7]" value=<?=$teclat?>>
            </div>
<!--portatil-->
            <div class="col-4 portatil">
              <img src="imatges/portatil.jpg" alt="portatil"> 
              <p>Portàtil Lenovo-580 euros 
                <input type="number" name="item[8]" min="0" max="5" value="0">
                <input type="hidden" name="preu[item8]" value=<?=$portatil?>>
            </div>
           
            
<!--grafica-->
            <div class="col-4 grafica">
              <img src="imatges/grafica.jpg" alt="Nvidia"> 
              
              <p>Tarjeta grafica Nvidia 1050 Ti-197 euros 
                <input type="number" name="item[9]" min="0" max="5" value="0">
                <input type="hidden" name="preu[item9]" value=<?=$grafica?>>
            </div>
           
            
<!--processador-->
            <div class="col-4 processador">
              <img src="imatges/procesador.jpg" alt="Intel core">
              <p>Procesador Intel core i5-8400-210 euros 
                <input type="number" name="item[10]" min="0" max="5" value="0">
                <input type="hidden" name="preu[item10]" value=<?=$processador?>>
              </div>
            
            
<!--font d'alimentació-->
            <div class="col-4 fuente">
              <img src="imatges/fuente.jpg" alt="fuente de alimentación">
              <p>Font d'alimentació 650W-35 euros 
                <input type="number" name="item[11]" min="0" max="5" value="0">
                <input type="hidden" name="preu[item11]" value=<?=$font?>>
              </div>
            
            
            </div>
          

</section><br>

            <p class="botons"><input type="submit" value="Comprar">
            <input type="reset" value="Cancelar"></p>
        
            
            </form>

<!--footer-->

<footer>

    <div class="copyright">
        <p>Pàgina creada per &copy;Victor Felices <br> amb Visual Studio Code</p>
  
    </div>

</footer>
    
        
</body>
</html>