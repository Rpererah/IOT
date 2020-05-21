<?php
 require_once "../banco.php";
 require_once "../models/usuarioDAO.php";
 $usuarioDAO = new UsuarioDAO($pdo);
 $rm = $_POST["id"];
 $nome = $_POST["nome"];
 $deficiencia = $_POST["deficiencia"];
 $idade = $_POST["idade"];
 $rua = $_POST["rua"];
 $bairro = $_POST["bairro"];
 $cidade = $_POST["cidade"];
 $uf = $_POST["uf"];
 
 $usuario = Usuario::criaUsuario($id,$nome,$deficiencia,$idade,$rua,$bairro,$cidade,$uf);
 $usuarioDAO->update($usuario);
 
 header("Location: /alohaphp/index.php?op=u&msg=ok");
?>