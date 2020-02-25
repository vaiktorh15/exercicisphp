<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2.5</title>
</head>
<body>

<?php

$nota=mt_rand(0,10);
$nota2=mt_rand(0,10);
$nota3=mt_rand(0,10);
$notafinal= round(($nota+$nota2+$nota3)/3);

switch($notafinal) {
case 0:
case 1:
case 2:
    case 3:
    case 4:
        $notafinaltxt="insuficient";
    break;
        case 5:
         $notafinaltxt="suficient";
    break;
case 6:
    $notafinaltxt="bé";
break;
    case 7:
    case 8:
        $notafinaltxt="notable";
    break;
        case 9:
        case 10:
            $notafinaltxt="excel·lent";
        break;

    }

echo "les notes son $nota,$nota2,$nota3, la nota final es $notafinal y es un $notafinaltxt";

?>
    
</body>
</html>