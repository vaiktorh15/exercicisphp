<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4.5</title>
</head>
<body>

<?php

$codigo="1234";
$verform=true;
if(isset($_GET["contador"])){
    $contador=$_GET["contador"];
    $num=$_GET["num"];
    if ($num==$codigo){
        echo "<p>La caja se ha abierto correctamente</p>";
        $contador=0;
        $verform=false;
    } else {
        echo "<p>Lo siento,esa no es la combinación</p>";
        $contador=$contador+1;
    }
}else{
    $contador=0;
}

if($contador==4){
    echo  "<p>Has usado los 4 intentos disponibles</p>";
    $verform=false;
}

if ($verform==true){

?>

<form action="ejercicio4-5.php" method="get">


<p>

Escribe el codigo de la caja fuerte

</p>

<p>
<input type="number" name="num" minlenght="0" maxlenght="4">
</p>

<p><input type="hidden" name="contador" value="<?=$contador?>"></p>
<input type="submit" value="enviar">

</form>
<?php
}
?>
</body>
</html>