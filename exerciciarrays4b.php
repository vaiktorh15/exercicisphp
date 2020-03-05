<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici Arrays 4b</title>
</head>
<body>
    
<?php

$palabra=$_POST["palabra"];


$translate=array("hormigas"=>"ants","azúcar"=>"sugar","toque"=>"knock","simplista"=>"simplistic",
"gasolina"=>"fuel","trote"=>"trot","burn"=>"quemar","bienvenido"=>"welcome"
,"whirl"=>"giro","difícil"=>"hard","concentrar"=>"concentrate","collar"=>"necklace"
,"facil"=>"easy","oscuro"=>"dark","pequeñito"=>"petite","límite"=>"limit","brazo"=>"shoe","zapato"=>"shoe"
,"dulce"=>"sweet","cosa"=>"thing");


if(isset($translate[$palabra])){
echo "$palabra en inglés es ".$translate[$palabra];

}else{
    echo "Lo sentimos,no tenemos la traducción de esa palabra";
}





?>







</body>
</html>