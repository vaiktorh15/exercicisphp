<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.4</title>
</head>
<body>


<?php


$diasetmana=mt_rand(1,7);


switch($diasetmana) { 
    case 1: $dia="Dilluns";
     $assignatura="creació de pàgines web amb el llenguatge de marques";
break;
    case 2: $dia="Dimarts";
     $assignatura="classe de programació web";
break;
    case 3: $dia="Dimecres";
     $assignatura="<p>creació de pàgines web amb el llenguatge de marques";
break;
    case 4: $dia="Dijous";
     $assignatura="classe de programació web";
break;
    case 5: $dia="Divendres";
     $assignatura="toca classe de publicació de pàgines web";
break;
    case 6: $dia="Dissabte";
    $assignatura="descansar";
break;
    case 7: $dia="Diumenge";
    $assignatura="descansar";
break;

}
echo "Avui es $dia i toca $assignatura";



?>
    


</body>
</html>