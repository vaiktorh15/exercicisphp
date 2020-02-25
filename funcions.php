<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcions</title>
</head>
<body>
    
<?php

function doble($valor){

return 2*$valor;

}
function f1($x){
$x=9;


}

function potencia($x,$exponente){
    $valor=1;
    for ($i=1;$i<=$exponente;$i++){
        $valor=$valor*$x;

}
    return $valor;

}
    echo potencia(2,6);

/*
$x=4;

$y=doble(9);
$z=doble($x);
echo "$z y $y"; */



?>
</body>
</html>