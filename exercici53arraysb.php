<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici Arrays</title>
</head>
<body>


<?php

$total=0;
$temp=$_GET["temperatura"];
$mes=$_GET["mes"];

$mes = array(
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");


for($i=0;$i<=12;$i++){
    if (isset($temp[$i])){
        echo '<br>';
        for($x=0;$x<=$temp[$i];$x++){
           echo "<img src='imatges/cuadrat.jpg' width='28px'>";
        }
    }
}




?>



</body>
</html>