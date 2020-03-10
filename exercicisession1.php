
<?php
session_start();

?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones 1</title>
</head>
<body>
<?php
    if (isset($_POST["usuario"]) and isset($_POST["contraseña"])){
        if(($_POST["usuario"]=="Victor") and ($_POST["contraseña"]=="vaiktor")) {
            $_SESSION["user"]=$_POST["usuario"];
            echo "Bienvenido" .$_SESSION["user"]; 
            
        }else{  
            echo "<p> Contraseña Incorrecta</p>";
            echo "<a href='exercicisession1.php'>Volver</a>"; 
        }

    }
    
else{
?>

<h1>Ejercicio sesiones 1</h1>

<form action="exercicisession1.php" method="post">

Usuario:
    <input type="text" name="usuario"><br>

Contraseña:
    <input type="password" name="contraseña"><br>


    <input type="submit" value="Iniciar sesión">



</form>
<?php
}
?>   


</body>
</html>