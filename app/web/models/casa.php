<?php 
class Casa {
  public $casa_id, $descricao, $id;
  static function criaCasa($casa_id, $nome, $id){ //a chave estrangeira entra?
    $casa = new Casa();
    $casa->casa_id = $casa_id;
    $casa->nome = $nome;
    $casa->professor = $professor;
    return $casa;
  }
}
?>