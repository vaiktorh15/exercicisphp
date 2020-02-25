<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio3.6</title>
  
</head>
<body>
    <table>

<?php



$num=mt_rand(1,100);
$numprimo=true;
for($i=2; $i<$num and $numprimo==true;$i=$i+1){

if ($num%$i==0)

$numprimo=false;

}

if($numprimo==true){


echo "$num es un numero primo";

}

else{

echo "$num no es un numero primo";

}


?>

</table>

</body>
</html>