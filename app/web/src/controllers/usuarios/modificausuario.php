<?php
 require_once "../../helpers/banco.php";
 require_once "../../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["USER_ID"];
 $nome = $_POST["USER_NOME"];
 $senha = $_POST["senha"];
 $rua = $_POST["RUA"];
 $bairro = $_POST["BAIRRO"];
 $cidade = $_POST["CIDADE"];
 $uf = $_POST["UF"];
 
 $usuario = Usuario::criaUsuario($rm,$nome,$senha,$rua,$bairro,$cidade,$uf);
 $usuarioDAO->update($usuario);
 
 header("Location: /alohaphp/index.php?op=u&msg=ok");
?>