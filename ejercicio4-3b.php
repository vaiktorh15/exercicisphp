<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4.3b</title>
</head>
<body>
    



<?php


if(isset($_GET["euros"])){


$dolars=$_GET["euros"]*1.10;


echo "<p>$dolars dolars</p>";


}
?>




</body>
</html>