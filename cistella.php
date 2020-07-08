<!DOCTYPE html>
<html>
<title>cistella</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="tiendas.css">

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
            <a href="http://localhost/exercicisphp-1/index.php">Seguir comprando</a>
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
        
    

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-45 w3-white">
  <i class="fa fa-shopping-cart fa-4x"></i> <h1 class="w3-xxxlarge"><b> Comanda </b></h1> 
    <h5> productes d'electrónica</h5>
  </header>

   <!-- Factura -->
   <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped">
          <thead>
            <tr>
            <th scope="col"> </th>
            <th scope="col">Producte</th>
            <th  scope="col">Preu</th>
            <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
    <?php  
        $total = 0;  
        $producte = $_GET["item"];
        $preus = $_GET["precio"]; 

        foreach($producte as $nom=>$quantitat){
            if($quantitat!=0){
                $total_producte = $preus[$nom]*$quantitat;
                $total += $total_producte
    ?>
            <tr>
                <th scope="row"> </th>
                <td><?=$nom?></td>
                <td><?=$preus[$nom]?></td>
                <td><?=$quantitat?></td>
                <td><?=$total_producte?></td>
            </tr>
    <?php           
            }
        }   
    ?>
            <tr>
                <th  scope="row"> </th>
                <td></td>
                <td>  </td>
                <td > </td>
                <td class="total" ><?= $total ?>€ </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<!--Descomptes-->
<div class="alert alert-success">
  <?php
    function discount1($a,$b=0.10){
        return $a-($a*$b);
    }
    function discount2($a,$b=0.15){
        return $a-($a*$b);
    }
    

    $total=0;
    $producte=$_GET["precio"];

    for($i=0;$i<=12;$i++){
        if (isset($producte[$i])){
        $total=$total+$producte[$i];
        }
        
    }if($total_producte<=0){
        echo "<p>El carrito esta vacío";
    }else if ($total_producte<=100){
        echo "<p>Compri més dels nostres productes per rebre un descompte!<br>
        El preu queda igual, serán $total_producte euros</p>";
    }else if ($total_producte>100 and $total_producte<=500){
        echo "<p>Li faré un descompte del 10% por la seva compra de fins $total_producte euros!<br>
        El preu queda en: "; 
        echo discount1($total_producte); 
    }else{
        echo "<p>Grácies por la teva compra! Li aplicaré un 15% de descompte per gastar fins a $total_producte euros!<br>
        El preu queda en: ";
        echo discount2($total_producte); 
    }


?>
</div>

<!--footer-->

<footer>

    <div class="copyright">
        <p>Pàgina creada per &copy;Victor Felices <br> amb Visual Studio Code</p>
  
    </div>

</footer>


</body>
</html>
