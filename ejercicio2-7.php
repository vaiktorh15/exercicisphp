<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.7</title>
</head>
<body>
    
<?php


$edad=mt_rand(20,60);
$salario=mt_rand(600,3000);

if($salario>2000){

echo $salariofinal="$edad $salario el salario es mayor de 2000 por lo tanto no cambia";

}

?>
<br>

<?php
if($salario>=1000 and $salario<=2000){

}elseif($edad>45){

 echo $salario2=round($salario) * 1.03;

}elseif($edad<=45){

echo $salario3=round($salario) * 1.10;

}

?>

<br>
<?php

if($salario<1000){

}elseif($edad<30){

echo $salariofinal4="las personas de $edad cobran exactamente 1100 euros";

}
?>
<br>   


<?php
if($edad>=30 and $edad<=45){

echo $salario4=round($salario) * 1.03;

echo $salariofinal5="$edad $salario4";

}elseif($edad>45){  

echo $salario5=round($salario) * 1.15;

echo $salariofinal6="$edad $salario5";
}

?>



</body>
</html>