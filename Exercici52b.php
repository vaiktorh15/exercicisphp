<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici arrays 2</title>
</head>
<body>
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
</body>
</html>