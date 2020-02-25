<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio3.1</title>
    <style>
table,tr,td {
  border:1px solid black;
}
</style>
</head>
<body>
    <table>

<?php

$i=1;
$numero=mt_rand(1,100);
while($i<100){  
    echo "<tr>";
    echo "<td>";
    echo $i+$numero;
    echo "</td>";
    echo "</tr>";
    $i++;
}

?>



</table>

</body>
</html>