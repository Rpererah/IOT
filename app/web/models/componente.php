<?php 
class Componente {
  public $comp_id, $comp_descricao, $valor, $data, $comp_nome, $data_garantia;
  static function criaComponente($comp_id, $comp_descricao, $valor, $data, $comp_nome, $data_garantia){
    $componente = new Componente();
    $componente->comp_id = $comp_id;
    $componente->comp_descricao = $comp_descricao;
    $componente->valor = $valor;
    $componente->data = $data;
    $componente->comp_nome = $comp_nome;
    $componente->data_garantia = $data_garantia;
    return $componente;
  }
}
?>