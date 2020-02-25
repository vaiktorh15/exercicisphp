<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        a{
            text-decoration:none;
            color: rgb(0,0,0);
        }
    </style>
    <title> Exercici 46 Resultat </title>
</head>

<body>
<button type="button">
        <a href="exercici_46.php"> 46 </a>
    </button> 
    <button type="button">
        <a href="exercici_46b.php"> 46b </a>
    </button> 
    <button type="button">
        <a href="exercici_46c.php"> 46c </a>
    </button> 
    <br>
       
    <?php 
        $altura = $_GET["altura"];
        $imatge = $_GET["menu"];
        
            echo "<table>";
            $i=1;
            While($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$i){
                    echo "<td>";
                    echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                    echo "</td>";
                    $a=$a+1;
                    }
                echo "</tr>";
                $i=$i+1;
                }
            echo "</table>";     
    ?>   
    
</body>
</html>
<!--echo "$i * <img src='img/totxana1.jpg' alt='totxana' width='50px'> <br>";-->