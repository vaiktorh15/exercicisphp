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
        .stil{
            margin: 20px 50px;
            float:left;
        }
    </style>
    <title> Exercici 46c Resultat </title>
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
    <div class="stil">  
    <?php 
        $altura = $_GET["altura"];
        $imatge = $_GET["menu"];
        $imatge2 = $_GET["menu2"];
        $times = $_GET["p1"];

            echo "<table>";
            $i=1;
            While($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$altura){
                    if($i%2 != 0) {
                        if($a%2 != 0){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>";
                        } elseif ($a%2 == 0) {
                            echo "<td>";
                            echo "<img src='img/$imatge2.jpg' alt='$imatge2' width='50px'>";
                            } 
                            echo "</td>";
                        }
                
                    if($i%2 == 0) {
                        if($a%2 == 0){ 
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>"; 
                            echo "</td>"; 
                        } elseif ($a%2 != 0){ 
                            echo "<td>";
                            echo "<img src='img/$imatge2.jpg' alt='$imatge2' width='50px'>";
                            echo "</td>"; 
                        }  
                    } 
                    $a=$a+1;
                }   
                echo "</tr>";
                $i=$i+1;  
            }
            echo "</table>";     
    ?>   
    </div>

    <div class="stil">  
    <?php 
      /*$altura = $_GET["altura"];
        $imatge = $_GET["menu"];
        $imatge2 = $_GET["menu2"];*/
        if($times == 1){
            echo "<table>";
            $i=1;
            While($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$altura){
                    if($i%2 != 0) {
                        if($a%2 == 0){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>"; 
                            echo "</td>";
                        } elseif ($a%2 != 0) {
                            echo "<td>";
                            echo "<img src='img/$imatge2.jpg' alt='$imatge2' width='50px'>";
                            echo "</td>";
                        }
                    }
                    if($i%2 == 0) {
                        if($a%2 != 0){ 
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>"; 
                        } elseif ($a%2 == 0){ 
                            echo "<td>";
                            echo "<img src='img/$imatge2.jpg' alt='$imatge2' width='50px'>";
                            echo "</td>"; 
                        }  
                    } 
                    $a=$a+1;
                }   
                echo "</tr>";
                $i=$i+1;
                
            }
            echo "</table>"; 
        }    
    ?>   
    </div>
</body>
</html>
