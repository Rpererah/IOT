<?php 
require_once "usuario.php";
class UsuarioDAO {
    private $con;
    public $tabela = "tb_usuarios";
    function __construct($con){
        $this->con = $con;
    }
    function save($usuario){
        $sql = "INSERT INTO ".$this->tabela." (USER_NOME,USER_TIPO,USER_DEFICIENCIA,USER_IDADE,RUA,BAIRRO,CIDADE,UF,USER_ID) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql); 
        $stmt->execute([$usuario->USER_ID, $usuario->USER_NOME,$usuario->USER_TIPO,$usuario->USER_DEFICIENCIA,$usuario->USER_IDADE, $usuario->RUA, $usuario->BAIRRO,$usuario->CIDADE,$usuario->UF,$usuario->admin]);
    }
    function update($usuario){
        $sql = "UPDATE ".$this->tabela." SET USER_NOME=?,USER_TIPO=?,USER_DEFICIENCIA=?,USER_IDADE=?,RUA=?,BAIRRO=?,CIDADE=?,UF=?, where USER_ID=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$usuario->USER_NOME,$usuario->USER_TIPO,$usuario->USER_DEFICIENCIA,$usuario->USER_IDADE, $usuario->RUA,$usuario->BAIRRO,$usuario->CIDADE,$usuario->UF $usuario->USER_ID]);
    }
    function delete($USER_ID){
        $sql = "DELETE FROM ".$this->tabela. " where USER_ID=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$USER_ID]);
    }
    function readAll(){
        $sql = "SELECT * FROM ".$this->tabela;
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        return $results;
        
    }
    function buscaPorUsuarioESenha($USER_ID){
        
        $sql = "SELECT * FROM ".$this->tabela. " where USER_ID=? and senha=?";
        $stmt = $this->con->prepare($sql);
        $stmt->execute([$USER_ID]);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Usuario");
        if(count($results) > 0){
            return $results[0];
        } else {
            return null;
        }
    }
}
?>