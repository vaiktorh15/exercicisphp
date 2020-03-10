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


for($i=0;$i<=12;$i++){
    if (isset($temp[$i])){
        echo $mes[$i];
        for($x=0;$x<=$temp[$i];$x++){
           echo "<img src='imatges/cuadrat.jpg' width='28px'>";
        }
       echo $temp[$i].'<br>';
    }
}




?>



</body>
</html>