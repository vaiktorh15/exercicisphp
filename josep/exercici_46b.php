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
        .ample{
            width: 200px;
        }
    </style>
    <title> Exercici 46c </title>
</head>

<body>
    <?php 
      
    ?>
    <div class="ample">
    <form action="exercici_46b_resultat.php" method="get">
        <fieldset>
            <legend> Alçada de la figura</legend>
            <p> <input type="number" name="altura" min="1" max="10" required>   </p>
        </fieldset>

        <fieldset>
            <legend> Foto </legend>
            <p>
            <select name="menu">
                <option value="totxana1" selected> totxos </option>
                <option value="globus1"> globo </option>
                <option value="ocell1"> ocell</option>
                <option value="papallona1"> papallona </option>
                <option value="planta1"> planta </option>
            </select>
            </p>
        </fieldset>

        <fieldset>
            <legend> Figures </legend>
            <p>
                <input type="radio" name="boton1" value="1">Piràmide<br>
                <input type="radio" name="boton8" value="8">Piràmide buida<br>
                <input type="radio" name="boton2" value="2">Piràmide invertida<br>
                <input type="radio" name="boton4" value="4">Piràmide dreta <br>
                <input type="radio" name="boton7" value="7">Piràmide esquerra <br>
                <input type="radio" name="boton3" value="3">Quadrat<br>
                <input type="radio" name="boton5" value="5">Diagonal <br>
                <input type="radio" name="boton6" value="6">Fletxa diagonal dreta
            </p>
        </fieldset>

            <p> <input type="reset" value="Borrar"></p>
            <p> <input type="submit" name="enviar"></p>
        

    </form>
     </div>
    
</body>
</html>
