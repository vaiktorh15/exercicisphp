<!DOCTYPE html>
<html lang="es">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Ejercicio 1</title>
       <style>
table,th,td {
       border: 1px solid black;
}

</style>

</head>
<body>
1.
<?php

$Nombre="Víctor";
$Apellidos="Felices López";
$email="vhevan15@gmail.com";

echo "<p>Hola, me llamo $Nombre</p>";

echo "<p>Mis apellidos son: $Apellidos</p>";

echo "<p>Mi correo es: $email</p>";


?>


2.

<?php


$eng1="love";
$cast1="amor";
$eng2="sad"; 
$cast2="triste";
$eng3="angry";
$cast3="enfadado";
$eng4="sage";
$cast4="sabio";
$eng5="felicidad";
$cast5="happiness";
$eng6="birthday";
$cast6="aniversario";
$eng7="ring";
$cast7="anillo";
$eng8="socks";
$cast8="calcetines";
$eng9="shoes";
$cast9="zapatos";
$eng10="hat";
$cast10="sombrero";

?>

<table>
<tr>

<td><?=$eng1?></td>
<td><?=$cast1?></td>

</tr>
<tr>

<td><?=$eng2?></td>
<td><?=$cast2?></td>

</tr>

<tr>

<td><?=$eng3?></td>
<td><?=$cast3?></td>

</tr>


<tr>

<td><?=$eng4?></td>
<td><?=$cast4?></td>

</tr>

<tr>

<td><?=$eng5?></td>
<td><?=$cast5?></td>

</tr>

<tr>

<td><?=$eng6?></td>
<td><?=$cast6?></td>

</tr><tr>

<td><?=$eng7?></td>
<td><?=$cast7?></td>

</tr><tr>

<td><?=$eng8?></td>
<td><?=$cast8?></td>

</tr><tr>

<td><?=$eng9?></td>
<td><?=$cast9?></td>

<tr>

<td><?=$eng10?></td>
<td><?=$cast10?></td>

</tr>

</table>


<br>
3.
<?php

$x=144;
$y=999;

$suma=$x+$y;
$resta=$x-$y;
$multiplicacion=$x*$y;
$division=$x/$y;

echo "<p>El valor de x es $x, el valor de y es $y</p>"; 

echo  "<p>La suma de $x y $y es $suma</p>";

echo  "<p>La resta de $x y $y es $resta</p>";

echo "<p>La multiplicación de $x y $y es $multiplicacion</p>";

echo "<p>La división de de $x y $y es $division</p>";





?>







</body>
</html>

