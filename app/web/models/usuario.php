<?php
class Usuario {
    public $id, $nome, $deficiencia, $senha, $idade, $rua, $bairro, $curso, $cidade, $uf, $tipo;
    static function criaUsuario($rm,$nome,$curso){
        $usuario = new Usuario();
        $usuario->id = $id;
        $usuario->nome = $nome;
        $usuario->deficiencia = $deficiencia;
        $usuario->idade = $idade;
        $usuario->rua = $rua;
        $usuario->bairro = $bairro;
        $usuario->cidade = $cidade;
        $usuario->uf = $uf;
        $usuario->tipo = 0;
        return $usuario;
    }
    function setarSenha($senha){
        $this->senha = md5($senha);
    }
}

?>