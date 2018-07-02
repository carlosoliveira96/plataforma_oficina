<?php
session_start();
if (isset($_SESSION["usuarioLogado"])){
    header("Location:inicio.php");
}else{
    header("Location:login.php");
}

?>