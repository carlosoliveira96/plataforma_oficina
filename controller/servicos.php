<?php
include('crud/crud.php');
include('../conexao/conexao.php');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'incluir':
        //Pega o valor da entrada no input passado pelo javascript
        $desc_servico = $_POST["desc_servico"];
        $check = $_POST["check"];

        //Passa informações de inclusão na variável utilizada
        $campos = "servico, situacao, tipo";
        $valores= "'{$desc_servico}', '1', '{$check}'";
        
        $servico = insere($conexao, $campos, $valores, "servico");

        if (strlen($servico['id']) <= 0 ) {
			print json_encode($servico);
        }
        break;
    case 'consulta':
        //Pega o valor entrada no input passado pelo javascript
        $desc_servico = $_POST["desc_servico"];

        if (strlen($desc_servico) > 0){
            $condicao = "servico LIKE '%$desc_servico%'";
                        
            $servico = busca_detalhada_varios($conexao, $condicao, "servico");

            if ($servico != null ) {
                print json_encode($servico);
            } else {
                print 0;
            }

        }else {
            $condicao = "situacao=1";
                        
            $servico = busca_todos($conexao, "servico");

            if ($servico != null ) {
                print json_encode($servico);
            } else {
                print 0;
            }
        }
        break;
        case 'altera':
            //Pega o valor entrada no input passado pelo javascript
            $desc_servico = $_POST["desc_servico"];
            $id_servico = $_POST['id_servico'];

            $campos_valores = "servico='$desc_servico'";
            $condicao = "id='{$id_servico}'";

            $servico = altera($conexao, $campos_valores, $condicao, "servico");
            
            if (strlen($servico['id']) == 0 ) {
                print json_encode($servico);
            }
        break;
        case 'excluir':
        //
            //Pega o valor do ID passado pelo javascript
            $id_servico = $_POST['id_servico'];
            $campos_valores = "situacao=0";
            $condicao = "id='{$id_servico}'";
            $servico = altera($conexao, $campos_valores, $condicao, "servico");
            if (strlen($servico['id']) == 0 ) {
                print json_encode($servico);
            }
        break;
        case 'reativar':
            //Pega o valor do ID passado pelo javascript
            $id_servico = $_POST['id_servico'];
            $campos_valores = "situacao=1";
            $condicao = "id='{$id_servico}'";
            $servico = altera($conexao, $campos_valores, $condicao, "servico");
            if (strlen($servico['id']) == 0 ) {
                print json_encode($servico);
            }
        break;
    default:
        break;
}