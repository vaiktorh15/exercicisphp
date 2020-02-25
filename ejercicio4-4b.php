<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4.4b</title>
</head>
<body>
    



<?php

$base=$_GET["euros"];

$irpf=$base*0.15;

$iva=$base*0.21;

$totalfactura=$base-$irpf+$iva;



echo "La factura con IRPF es $irpf y con IVA es $iva, el total es $totalfactura";

?>




</body>
</html>