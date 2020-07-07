
<?php
session_start();

?>

<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tiendas2.css">
    <title>Iniciar sesion</title>
</head>
<body>
<?php
    if (isset($_POST["usuario"]) and isset($_POST["contraseña"])){
        if(($_POST["usuario"]=="Victor") and ($_POST["contraseña"]=="vaiktor")) {
            $_SESSION["user"]=$_POST["usuario"];
            echo "Bienvenido " .$_SESSION["user"]; 
            
        }else{  
            echo "<p> Contraseña Incorrecta</p>";
            header("Location:sesionfail1.php");
        }

    }
    
else{
?>

<header>
<h1>Iniciar sesion tienda online Victor</h1>
</header>
<form action="index.php" method="post">

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