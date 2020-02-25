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
    <title> Exercici 46 </title>
</head>

<body>
    <?php 
      
    ?>

    <form action="exercici_46_resultat.php" method="get">
        <p> Quina alçada vols de la piràmide?? </p>
        <p> <input type="number" name="altura" min="1" max="10" required >   </p>
        <select name="menu">
                <option value="totxana1" selected> totxos </option>
                <option value="globus1"> globo </option>
                <option value="ocell1"> ocell</option>
                <option value="papallona1"> papallona </option>
                <option value="planta1"> planta </option>
        </select>
        <p> <input type="submit" name="enviar"></p>

    </form>
     
    
</body>
</html>
