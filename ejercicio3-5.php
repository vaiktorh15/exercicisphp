<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio3.5</title>
    <style>
table,tr,td {
  border:1px solid blue;
}
</style>
</head>
<body>
    <table>

<?php


$i=mt_rand(0,10);
$numero=0;
while($numero<11){
    echo "<tr>";
    echo "<td>";
    echo $i*$numero;
   echo "</td>";
   echo "</tr>";
   
    $numero=$numero+1;
     
}

echo "<p> Taula de multiplicar de $i </p>";

?>

</table>

</body>
</html>