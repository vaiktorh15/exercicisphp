<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.6</title>
</head>
<body>



<?php


$hora=mt_rand(0,23);
if($hora==0){

    $horatxt="mitjanit";

}elseif($hora<=13){
$horatxt="Bon dia";

}elseif($hora<20){

$horatxt="Bona tarda";


}else{

$horatxt="Bona nit";

}

echo "La hora es $hora,$horatxt";


?>

</body>
</html>