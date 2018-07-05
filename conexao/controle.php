<?php
session_start();

if($_SESSION["perfilUsuario"] == "1" || $_SESSION["perfilUsuario"] == "2" || $_SESSION["perfilUsuario"] == "3" || $_SESSION["perfilUsuario"] == "4" || $_SESSION["perfilUsuario"] == "5" ){
    header("Location:../inicio.php");
}
?>