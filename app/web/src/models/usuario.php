<?php
class Usuario {
    public $USER_ID, $USER_NOME, $RUA, $BAIRRO, $CIDADE, $UF;
    static function criaUsuario($USER_ID,$USER_NOME,$RUA,$BAIRRO,$CIDADE,$UF){
        $usuario = new Usuario();
        $usuario->USER_ID = $USER_ID;
        $usuario->USER_TIPO = $USER_TIPO;
        $usuario->USER_DEFICIENCIA = $USER_DEFICIENCIA;
        $usuario->USER_NOME = $USER_NOME;
        $usuario->USER_IDADE = $USER_IDADE;
        $usuario->RUA = $RUA;
        $usuario->BAIRRO = $BAIRRO;
        $usuario->CIDADE = $CIDADE;
        $usuario->UF = $UF;
        $usuario->admin = 0;
        return $usuario;
    }
    function setarSenha($senha){
        $this->senha = md5($senha);
    }
}
?>









