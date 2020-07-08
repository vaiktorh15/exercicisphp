<?php
session_start();
session_destroy();
header('location:/dist/tienda.php?m=2');
?>