<?php
include('crud/crud.php');
include('../conexao/conexao.php');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'consultar':
        $condicao = "tipo = 2";
        $expediente = busca_detalhada_varios($conexao, $condicao, 'expediente');

        if($expediente != null){
            print json_encode($expediente);
        }
    break;
    case 'cadastrar':
        //Pega o valor da entrada no input passado pelo javascript
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $tipo = '2';

        if (strlen($_POST["observacoes"]) <= 0){
            $observacoes = 'NULL';
        }else{
            $observacoes = "'".$_POST['observacoes']."'";
        }

        //Passa informações de inclusão na variável utilizada
        $campos = "titulo, conteudo, observacao, tipo";
        $valores= "'$titulo', '$descricao', $observacoes, '$tipo'";
        
        $expediente = insere($conexao, $campos, $valores, "expediente");

        if (strlen($expediente['id']) <= 0 ) {
			print json_encode($expediente);
        }
    break;
    case 'alterar':
        //Pega o valor da entrada no input passado pelo javascript
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];

        if (strlen($_POST["observacoes"]) <= 0){
            $observacoes = 'NULL';
        }else{
            $observacoes = "'".$_POST['observacoes']."'";
        }

        $campos_valores = "titulo = '$titulo', conteudo = '$descricao', 
        observacao = $observacoes";
        $condicao = "id = $id";
        
        $expediente = altera($conexao, $campos_valores, $condicao, "expediente");

        if (strlen($expediente['id']) <= 0 ) {
            print json_encode($expediente);
        }
    break;
    case 'excluir':
        //Pega o valor do ID para montar a condição
        $id = $_POST['id_expediente'];
        $condicao = "id = $id";
        $expediente = deleta($conexao , 'expediente' , $condicao);

        if (strlen($expediente['id']) <= 0 ) {
            print json_encode($expediente);
        }
    break;
    default:
    break;
}