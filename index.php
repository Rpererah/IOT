<?php
session_start(); 
if(!isset($_SESSION['usuario']))
{
    header ('Location: app/web/Entrada.php');
} else {
    header ('Location: app/web/index.php');
}

?>
