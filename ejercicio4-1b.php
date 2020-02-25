<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio4.1</title>
    <style>
    table,tr,td {

        border:1px solid blue;
    }

    </style>
</head>

<body>
<table>
<?php

$i=1;
$numero=0;

while ($numero<11){


        echo "<tr>";
        echo "<td>";
        echo $_GET["menu"]." multiplicat per $numero";
        echo "</td>";

        echo "<td>";
        echo $_GET ["menu"]*$numero;
        echo "</td>";
        echo "</tr>";

$numero=$numero+1;


}


?>



</table>

</body>

</html>
