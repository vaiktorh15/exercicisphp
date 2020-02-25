<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.8extrab</title>
    <link rel="stylesheet" href="formularioextra1.css">
</head>
<body>
    <?php

$numero=$_GET["number"];
$contador=1;


while($contador<=$numero){

    $red=mt_rand(0,255);
    $green=mt_rand(0,255);
    $blue=mt_rand(0,255);
    $x=mt_rand(0,100);
    $y=mt_rand(0,100);
    
    
    echo "<div class='caixa'style='left:$x%; top:$y%; background-color: rgb($red,$green,$blue);'</div>";
    $contador=$contador+1;
    
    }


?>

</body>
</html>