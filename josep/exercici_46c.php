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
    <title> Exercici 46c </title>
</head>

<body>
    <form action="exercici_46c_resultat.php" method="get">
        <p> Tria l'alçada de la figura i un parell de fotos </p>
        <p> <input type="number" name="altura" min="1" max="10" required >   </p>
        <p>
        <select name="menu">
                <option value="totxana1" selected> totxos </option>
                <option value="globus1"> globo </option>
                <option value="ocell1"> ocell</option>
                <option value="papallona1"> papallona </option>
                <option value="planta1"> planta </option>
        </select>
        </p>
        <select name="menu2">
                <option value="totxana1" selected> totxos </option>
                <option value="globus1"> globo </option>
                <option value="ocell1" selected> ocell</option>
                <option value="papallona1"> papallona </option>
                <option value="planta1"> planta </option>
        </select>

        <p> Quantes figures vols? </p>
                <p> <input type="radio" name="p1" value="0" required selected> 1 <br>
                    <input type="radio" name="p1" value="1" required> 2  
                </p>
        <p> <input type="submit" name="enviar"></p>
    </form> 
</body>
</html>
