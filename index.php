<?php 
/* 
crie uma classe chamada blog com as seguintes funcionalidades (metodos:) listagem, inclusao, edicao, exclusao de post

a conexao com a base de dados pode ser realizada no metodo construtor da classe

crie um arquivo responsavel por tratar as operacoes e realizar de fato a chamada para cada operacao (metodo) da classe persistente.
*/
require 'produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {

  case 'list':
    echo "<h3>Produtos: </h3>";
    foreach($produto->list() as $value) {
       echo "Id: " . $value['id'] . "<br> Descricao: ". $value['desricao'] . "</br>";
    }
    
    break;
  
  case 'insert':
    
    $status = $produto->insert('Produto teste 01');

    if(!$status) {
      echo "Registro nao realizado";
      return false;
    }
    echo "Registro efetuado com sucesso";
    
    break;
  
  case 'update':
    
    $status = $produto->update('Produto teste atualizado', 1);

    if(!$status) {
      echo "Registro nao foi atualizado";
      return false;
    }
    echo "Registro atualizado com sucesso";
    
    break;
  
  case 'delete':
    $status = $produto->delete(1);

    if(!$status) {
      echo "Operacao nao realizada";
      return false;
    }
    echo "Registro removido com sucesso";
    
    break;
}