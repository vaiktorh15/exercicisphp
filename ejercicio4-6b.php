<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4.6</title>
</head>
<body>

<?php

$filas=$_GET["filas"];
$contador=0;
$menu=$_GET["menu"];


while ($contador<$filas){

    $contador2=0;
        while ($contador2<$contador){

            echo"$menu";
            $contador2=$contador2+1;
}

$contador=$contador+1;
echo "<br>";

}

?>



</body>
</html>