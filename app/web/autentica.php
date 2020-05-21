<?php 
session_start();
require_once "banco.php";
require_once "models/usuarioDAO.php";
$usuarioDAO = new UsuarioDAO($pdo);
$usuario = $_POST ["usuario"];
$senha = $_POST["password"];

$usuario = $usuarioDAO->buscaPorUsuarioESenha($id, $senha);
print_r($usuario);
if($usuario != null){
    $_SESSION['usuario'] = true;
    $_SESSION['nome_usuario'] = $usuario->nome;
    header("Location: index.php");
} else {
    header("Location: Entrada.php");
}
?> 