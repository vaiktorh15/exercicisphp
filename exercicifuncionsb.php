<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcions exercici 1</title>
</head>
<body>
    

<?php


$suma1=$_GET["number1"];
$suma2=$_GET["number2"];

function suma($x,$y){
    return $x+$y;
}
/* $ressuma=suma($suma1,$suma2);
echo "El resultat de la suma es $ressuma";*/
echo "<p> El resultat de la suma es</p>" .suma($suma1,$suma2);

/*$sumatotal=$suma1+$suma2;*/

$resta1=$_GET["number3"];
$resta2=$_GET["number4"];


function resta($x,$y){
    return $x-$y;
}
echo "<p> El resultat de la resta es</p>" .resta($resta1,$resta2);

/*$restatotal=$resta1-$resta2;*/

$multiplicació1=$_GET["number5"];
$multiplicació2=$_GET["number6"];

function multiplicació($x,$y){
    return $x*$y;
}
echo "<p>El resultat de la multiplicació es</p>" .multiplicació($multiplicació1,$multiplicació2);

/*$multiplicaciótotal=$multiplicació1*$multiplicació2;*/

$divisió1=$_GET["number7"];
$divisió2=$_GET["number8"];
function divisió($x,$y){
    return $x/$y;
}
echo "<p> El resultat de la divisió es</p>" .divisió($divisió1,$divisió2);


/*$divisiótotal=$divisió1/$divisió2;*/


/*echo "suma total $sumatotal";*/

/*echo " resta total $restatotal";*/

/*echo " multiplicació total $multiplicaciótotal";*/

/*echo " divisió total $divisiótotal";*/

?>




</body>
</html>