<?php 
require_once('src/models/componente.php');
class ComponenteDAO {
    private $con;
    function __construct($con){
        $this->con = $con;
    }
    function save($componente){
        $sql = "INSERT INTO Componente (COMP_DESCRICAO, COMP_VALOR, COMP_DATA, COMP_NOME, COMP_DATA_GARANTIA) values (?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array($curso->comp_descricao, $curso->valor. $curso->data, $curso->comp_nome, $curso->data_garantia));
    }

    function readAll(){
        $stmt = $this->con->prepare('SELECT * FROM Componente');
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Curso");
        return $results;
    }

    function update($curso){
        $stmt = $this->con->prepare('UPDATE Componente SET COMP_DESCRICAO, COMP_VALOR, COMP_DATA, COMP_NOME, COMP_DATA_GARANTIA where COMP_ID=?');
        $stmt->execute(array($curso->comp_descricao, $curso->valor. $curso->data, $curso->comp_nome, $curso->data_garantia, $curso->comp_id));
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Curso");
    }

    function delete($curso){
        $stmt = $this->con->prepare('DELETE from Componente where COMP_ID=?');
        $stmt->execute(array($curso->comp_descricao, $curso->valor. $curso->data, $curso->comp_nome, $curso->data_garantia ,$curso->comp_id));        
    }
}


?>