<!DOCTYPE html>
<?php
session_start();

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>Welcome Mr- <?=$_SESSION["usuari"]?></p>
<p>Nos has visitado <?=$_SESSION["visitas"]?> veces </p>
<a href="temp.php">volver</a>
<?php // unset($_SESSION["usuari"])
session_destroy();

?>

</body>
</html>