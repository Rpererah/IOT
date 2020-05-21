<?php 
require_once "usuario.php";

class UsuarioDAO {
    private $con;
    public $tabela = "Usuario";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (USER_ID,USER_NOME,USER_SENHA,USER_DEFICIENCIA,USER_IDADE,RUA,BAIRRO,CIDADE,UF,USER_TIPO) values (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql); 
        $stmt->execute([$usuario->id, $usuario->nome, $usuario->senha, $usuario->deficiencia,$usuario->idade,$usuario->rua,$usuario->bairro,$usuario->cidade,$usuario->uf,$usuario->tipo]);
    }

    function update($usuario){
        $sql = "UPDATE ".$this->tabela." SET USER_NOME=?,USER_DEFICIENCIA=? where USER_ID=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->nome, $usuario->deficiencia, $usuario->id]);
    }

    function delete($id){
        $sql = "DELETE FROM ".$this->tabela. " where USER_ID=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id]);
    }

    function readAll(){
        $sql = "SELECT * FROM ".$this->tabela;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        return $results;
        
    }

    function buscaPorUsuarioESenha($id, $senha){
        
        $sql = "SELECT * FROM ".$this->tabela. " where USER_ID=? and USER_SENHA=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$id,$senha]);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        if(count($results) > 0){
            return $results[0];
        } else {
            return null;
        }
    }
}

?>