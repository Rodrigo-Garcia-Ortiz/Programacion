<?php //Cierra sesión y vuelve a escoger usuario
session_start();
session_unset();
session_destroy();
header("Location: index.php");
?>