<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.3</title>
</head>
<body>

<?php

$dia=mt_rand(1,7);


if($dia==1){

echo "<p>Dilluns toca classe de creació de pàgines web amb el llenguatge de marques</p>";

}
elseif ($dia==2){

echo "<p>Dimarts toca classe de programació web</p>";
 
}

elseif ($dia==3){

    echo "<p>Dimecres toca classe de creació de pàgines web amb el llenguatge de marques</p>";

}
elseif ($dia==4){

echo "<p>Dijous toca classe de programació web</p>";

}
elseif ($dia==5){

echo "<p>Divendres toca classe de publicació de pàgines web</p>";

}

else{

    echo "<p>No hi ha classes</p>";
}
?>


    
</body>
</html>