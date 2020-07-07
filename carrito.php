<!DOCTYPE html>
<html>
<title>carrito compra</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="tiendas2.css">

<body>
  

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="http://localhost/exercicisphp-1/index.php">Seguir comprando</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="http://localhost/exercicisphp-1/sesiontienda.php">Iniciar sesión</a>
          </li>    
        </ul>
    </div>  
  </nav>

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b> Carrito de tu compra </b></h1>
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
            <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
    <?php  
        $total = 0;  
        $producte = $_GET["item"];
        $preus = $_GET["preu"]; 

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
                <th scope="row"> </th>
                <td></td>
                <td >  </td>
                <td> </td>
                <td class="total" ><?= $total ?>€ </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<!--descomptes-->
  <?php
    function discount1($a,$b=0.10){
        return $a-($a*$b);
    }
    function discount2($a,$b=0.15){
        return $a-($a*$b);
    }
    

    $total=0;
    $producto=$_GET["item"];

    for($i=0;$i<=12;$i++){
        if (isset($producto[$i])){
        $total=$total+$producto[$i];
        }
    }
    /*foreach ($producto as $indice=>$valor){
        echo "Has comprado $indice, que vale $valor <br>";
        $total=$total+$valor;
    }*/


    /*descomptes*/

    if ($total<=100){
        echo "Compri més dels nostres productes per rebre un descompte!<br>
        El preu queda igual, serán $total euros";
    }else if ($total>100 and $total<=500){
        echo "Li faré un descompte del 10% por la seva compra de fins $total euros!<br>
        El preu queda en: "; 
        echo discount1($total); 
    }else{
        echo "Grácies por la teva compra! Li aplicaré un 15% de descompte per gastar fins a $total euros!<br>
        El preu queda en: ";
        echo discount2($total); 
    }


?>

<br>
<a class="botons" href="index.php">Volver</a>

<!-- Footer -->

<p class="botons"><input type="submit" value="Comprar">
  <footer class="copyright">
        <p>Victor's electronic shop</p>
  </footer>



</body>
</html>
