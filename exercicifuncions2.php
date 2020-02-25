<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcions exercici 2</title>
</head>
<body>
    
<form action="exercicifuncions2.php" method="get">

<input type="number" name="dolars" min="1" max="10000">

<p>
<input type="submit" value="enviar">
</p>

<hr>

</form>


<?php

if (isset($_GET["dolars"])){

    function sindescuento($x){
        return $x;
    }

    function descuento10($x){
        return $x*0.10;
    }

    function descuento15($x){
        return $x*0.15;

    }
    $precio=$_GET["dolars"];
    if ($precio<100){
        echo " no hay descuento ".sindescuento($precio);
        $descuento=0;
    }

    elseif ($precio>=100 and $precio<=499.99){
        $descuento=descuento10($precio);
        echo " se descuenta un 10% $descuento";
    }

    else{
        $descuento=descuento15($precio);
        echo "se descuenta un 15% $descuento";
    }

    $total=$precio-$descuento;
        echo " el precio final es $total";

}
?>


</body>
</html>