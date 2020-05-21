<?php 
require_once('casa.php');
class CasaDAO {
    private $con;
    function __construct($con){
        $this->con = $con;
    }
    function save($casa){
        $sql = "INSERT INTO Casa (CASA_DESCRICAO) values (?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute(array($casa->nome));
    }

    function readAll(){
        $stmt = $this->con->prepare('SELECT * FROM Casa');
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Casa");
        return $results;
    }

    function update($casa){
        $stmt = $this->con->prepare('UPDATE Casa SET CASA_DESCRICAO=? where CASA_ID=?');
        $stmt->execute(array($casa->nome, $casa->professor, $casa->casa_id));
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, "Casa");
    }

    function delete($casa){
        $stmt = $this->con->prepare('DELETE from Casa where CASA_ID=?');
        $stmt->execute(array($casa->casa_id));        
    }
}


?>