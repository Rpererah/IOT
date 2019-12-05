<?php
 require_once "../../helpers/banco.php";
 require_once "../../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["USER_ID"];
 $tipo = $_POST["USER_TIPO"];
 $deficiencia = $_POST["USER_DEFICIENCIA"];
 $nome = $_POST["USER_NOME"];
 $idade = $_POST["USER_IDADE"];
 $senha = $_POST["senha"];
 $rua = $_POST["RUA"];
 $bairro = $_POST["BAIRRO"];
 $cidade = $_POST["CIDADE"];
 $uf = $_POST["UF"];
 
 $usuario = Usuario::criaUsuario($rm,$nome,$curso);
 $usuario->setarSenha($senha);
 $usuarioDAO->save($usuario);
 
 header("Location: /alohaphp/index.php?op=c&msg=ok");
?>