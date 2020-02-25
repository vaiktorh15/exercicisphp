<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4.7</title>
</head>
<body>

<?php

$p1=$_GET["p1"];
$p2=$_GET["p2"];
$p3=$_GET["p3"];
$p4=$_GET["p4"];
$p5=$_GET["p5"];
$p6=$_GET["p6"];
$p7=$_GET["p7"];
$p8=$_GET["p8"];
$p9=$_GET["p9"];
$p10=$_GET["p10"];

$total=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;

echo "<p>Tu resultado es $total </p>";

if ($total<=10){

echo "<p>¡Enhorabuena! tu pareja parece ser totalmente fiel.</p>";


}elseif ($total>=11 and $total<=22){


echo "<p>Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.
</p>";



}else{

echo "<p>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.</p>";

}


?>



</body>
</html>