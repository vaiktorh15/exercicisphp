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

$temperatura=$_GET["temperatura"];



for($i=0;$i<=12;$i++){
    if (isset($temperatura[$i])){
    $total=$total+$temperatura[$i];
    }
}

echo "total de temperatura del año $total"




?>



</body>
</html>