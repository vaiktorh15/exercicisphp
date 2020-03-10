<!DOCTYPE html>
<?php
session_start();
$_SESSION["usuari"]="Víctor";
if(isset($_SESSION["visitas"])){
    $_SESSION["visitas"]++;

}else{
$_SESSION["visitas"]=1;

}

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><a href="testtemp.php">ve a la siguiente página</a></p>




</body>
</html>