<?php
session_start();

if($_SESSION["perfilUsuario"] == "1"){
    header("Location:../inicio.php");
}
?>