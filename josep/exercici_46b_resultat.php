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
            margin: 0px 0 0px 30px;
            float:left;
        }
    </style>
    <title> Exercici 46b Resultat </title>
</head>

<body>
    <!-- enllaços pels exercicis -->
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
    <!-- piramide --> 
    <?php 
        if(isset($_GET["boton1"])){
            echo "<div class='stil'>"; 
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
                echo "<table>";
                $i=1;
                while($i<=$altura){
                    $a=1;
                    echo "<tr>";
                    while($a<=$altura*2-1){
                        if($a>=$altura-($i-1) and $a<=$altura+($i-1)){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>";
                        } else {
                            echo "<td>";
                            echo " ";
                            echo "</td>";
                        }
                        $a=$a+1;
                    }
                    echo "</tr>";
                    $i=$i+1;
                    }
                echo "</table>"; 
            echo "</div>"; 
        }   
    ?>   
    
    <!-- quadrat --> 
    <?php 
         
        if(isset($_GET["boton3"])){
            echo "<div class='stil'>";
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
                echo "<table>";
                $i=1;
                while($i<=$altura){
                    $a=1;
                    echo "<tr>";
                    while($a<=$altura){
                        if($i==1 or $i==$altura ){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>"; 
                        }elseif($a==1 or $a==$altura){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>";
                        } else {
                            echo "<td>";
                            echo " ";
                            echo "</td>";
                        }
                        $a=$a+1;
                    }
                    echo "</tr>";
                    $i=$i+1;
                    }
                echo "</table>"; 
            echo "</div>"; 
        } 
          
    ?> 
    
    <!-- piramide invertida -->   
    <?php 
        
        if(isset($_GET["boton2"])){
            echo "<div class='stil'>"; 
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
                echo "<table>";
                $i=1;
                while($i<=$altura){
                    $a=1;
                    echo "<tr>";
                    while($a<=$altura*2-1){
                        if($a<=($i-1) or $a>$altura+($altura-$i)){
                            echo "<td>";
                            echo " ";
                            echo "</td>";
                        } else {
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>";
                        }
                        $a=$a+1;
                    }
                    echo "</tr>";
                    $i=$i+1;
                    }
                echo "</table>";
            echo "</div>"; 
        }              
    ?> 
    
    <!-- piramide dreta -->
    <?php 
        
        if(isset($_GET["boton4"])){
            echo "<div class='stil'>"; 
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
            echo "<table>";
            $i=1;
            while($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$altura/2+1){
                    if($a<=$i and $i<=$altura/2){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    } elseif ($i>$altura/2 and $a<=$altura-$i+1){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    } else {
                        echo "<td>";
                        echo " ";
                        echo "</td>";
                    }
                    $a=$a+1;
                    }
                echo "</tr>";
                $i=$i+1;
                }
            echo "</table>"; 
            echo "</div>"; 
        }             
    ?>   
     
    <!-- piramide esquerra --> 
    <?php 
        
        if(isset($_GET["boton7"])){
            echo "<div class='stil'>"; 
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
            echo "<table>";
            $i=1;
            while($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=($altura+1)/2){
                    if ($a>($altura+1)/2-$i and $i<=($altura+1)/2){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    } elseif ($i>($altura+1)/2 and $a>$i-(($altura+1)/2)){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    } else {
                        echo "<td>";
                        echo " ";
                        echo "</td>";
                    }
                    $a=$a+1;
                    }
             
            echo "</tr>";
            $i=$i+1;
            }
        echo "</table>"; 
        echo "</div>";  
        }              
    ?>   
   
    <!-- Diagonal avall dreta -->   
    <?php  
        if(isset($_GET["boton5"])){
            echo "<div class='stil'>";
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
            echo "<table>";
            $i=1;
            while($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$altura){
                    if($a==$i){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    }  else {
                        echo "<td>";
                        echo " ";
                        echo "</td>";
                    }
                    $a=$a+1;
                    }
                echo "</tr>";
                $i=$i+1;
                }
            echo "</table>"; 
            echo "</div>";
        }            
    ?>   
      
<!-- Fletxa avall dreta --> 
    <?php  
        if(isset($_GET["boton6"])){
            echo "<div class='stil'>";
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
            echo "<table>";
            $i=1;
            while($i<=$altura){
                $a=1;
                echo "<tr>";
                while($a<=$altura){
                    if($a==$i or ($i==$altura and $a>=$altura-2) or ($a==$altura and $i>=$altura-2)){
                        echo "<td>";
                        echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                        echo "</td>";
                    }  else {
                        echo "<td>";
                        echo " ";
                        echo "</td>";
                    }
                    $a=$a+1;
                    }
                echo "</tr>";
                $i=$i+1;
                }
            echo "</table>";
        echo "</div>"; 
        }            
    ?>   

<!-- piramide buida --> 
<?php 
        if(isset($_GET["boton8"])){
            echo "<div class='stil'>"; 
            $altura = $_GET["altura"];
            $imatge = $_GET["menu"];
            
                echo "<table>";
                $i=1;
                while($i<=$altura){
                    $a=1;
                    echo "<tr>";
                    while($a<=$altura*2-1){
                        if ($a>=$altura-($i-2) and $a<=$altura+($i-2) and $i!=$altura) {
                            echo "<td>";
                            echo " ";
                            echo "</td>";
                        } elseif($a>=$altura-($i-1) and $a<=$altura+($i-1)){
                            echo "<td>";
                            echo "<img src='img/$imatge.jpg' alt='$imatge' width='50px'>";
                            echo "</td>";
                        } else {
                            echo "<td>";
                            echo " ";
                            echo "</td>";
                        }
                        $a=$a+1;
                    }
                    echo "</tr>";
                    $i=$i+1;
                    }
                echo "</table>"; 
            echo "</div>"; 
        }   
    ?>       
</body>
</html>