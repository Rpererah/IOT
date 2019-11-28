<?php 
session_start();
$usuario = $_POST ["usuario"];
$senha = $_POST["password"];

$_SESSION["usuario"] = $usuario;
header ("Location: index.php");
?> 