<?php
//lembre de fazer o git 30/04/2020
session_start(); 
if(!isset($_SESSION['usuario']))
{
    header ('Location: app/web/Entrada.php');
} else {
    header ('Location: app/web/index.php');
}

?>
