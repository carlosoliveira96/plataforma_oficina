<?php
include('crud/crud.php');
include('../conexao/conexao.php');

date_default_timezone_set('America/Sao_Paulo');
$date = date('d-m-Y');
$mes = date('m');
$ano = date('Y');
$mes_ano = date('Y-m');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'busca_corretores':
        $condicao = "tipo = 'corretor'";
        $tabela = "cadastro";
        $corretores = busca_detalhada_varios($conexao, $condicao, $tabela, 'nome_fantasia , id , nome');

        if ($corretores != null){
            print json_encode($corretores);
        }
    break;
    case 'busca_seguradoras':
        $condicao = "tipo = 'seguradora'";
        $tabela = "cadastro";
        $seguradoras = busca_detalhada_varios($conexao, $condicao, $tabela, 'nome_fantasia , id , nome');

        if ($seguradoras != null){
            print json_encode($seguradoras);
        }
    break;
    case 'busca_os':

        $pesquisa = $_POST['pesquisa'];
        $corretor = $_POST['corretor'];
        $seguradora = $_POST['seguradora'];
        $data_inicio = $_POST['data_inicio'];
        $data_fim = $_POST['data_fim'];

        if(strlen($data_inicio) <= 0){
            $data_inicio = "01/01/0001";
        }

        if(strlen($data_fim) <= 0){
            $data_fim = "31/12/9999";
        }

        $data_inicio = date_format(date_create_from_format('d/m/Y', $data_inicio), 'Y/m/d');
        $data_fim = date_format(date_create_from_format('d/m/Y', $data_fim), 'Y/m/d');  
        //$data1 = new DateTime($data_inicio);
        //$data_inicio = date_format($data1, 'Y/m/d');
        //$data2 = new DateTime($data_final );
        //$data_fim = date_format($data2, 'Y/m/d');  
        
        
        $os ="";
        if (strlen($corretor) > 0 && strlen($seguradora) > 0 ){
            $os = busca_detalhada_varios($conexao, "a.seguradora_id = '{$seguradora}' AND a.corretor_id = '{$corretor}' AND (a.placa like '%{$pesquisa}%' OR  a.sinistro  LIKE '%{$pesquisa}%' OR  a.nome LIKE '%{$pesquisa}%' OR '%{$pesquisa}%' OR  a.modelo LIKE '%{$pesquisa}%') AND STR_TO_DATE(a.data_cadastro, '%d/%m/%Y') BETWEEN '{$data_inicio}' AND '{$data_fim}' GROUP BY a.id" , "cliente a, cadastro b" , "a.*, a.id as id_os, a.nome as nome_cliente, a.nome_fantasia as nome_fantasia_cliente, b.nome, b.nome_fantasia");
        }else if (strlen($corretor) <= 0 && strlen($seguradora) <= 0){
            $os = busca_detalhada_varios($conexao, "(a.placa like '%{$pesquisa}%' OR a.sinistro LIKE '%{$pesquisa}%' OR a.nome OR '%{$pesquisa}%' OR a.modelo LIKE '%{$pesquisa}%') AND STR_TO_DATE( a.data_cadastro , '%d/%m/%Y' ) BETWEEN '{$data_inicio}' AND '{$data_fim}' GROUP BY a.id" , "cliente a, cadastro b", "a.*, a.id as id_os, a.nome as nome_cliente, a.nome_fantasia as nome_fantasia_cliente, b.nome, b.nome_fantasia");                
        }else if(strlen($seguradora) <= 0){
            $os = busca_detalhada_varios($conexao, "a.corretor_id = '{$corretor}' AND (a.placa like '%{$pesquisa}%' OR a.sinistro LIKE '%{$pesquisa}%' OR a.nome OR '%{$pesquisa}%' OR a.modelo LIKE '%{$pesquisa}%') AND a.corretor_id = '{$corretor}' AND STR_TO_DATE( a.data_cadastro , '%d/%m/%Y' ) BETWEEN '{$data_inicio}' AND '{$data_fim}' GROUP BY a.id" , "cliente a, cadastro b", "a.*, a.id as id_os, a.nome as nome_cliente, a.nome_fantasia as nome_fantasia_cliente, b.nome, b.nome_fantasia");
        }else if(strlen($corretor) <= 0){
            $os = busca_detalhada_varios($conexao, "a.seguradora_id = '{$seguradora}' AND (a.placa like '%{$pesquisa}%' OR a.sinistro LIKE '%{$pesquisa}%' OR a.nome OR '%{$pesquisa}%' OR a.modelo LIKE '%{$pesquisa}%') AND STR_TO_DATE( a.data_cadastro , '%d/%m/%Y' ) BETWEEN '{$data_inicio}' AND '{$data_fim}' GROUP BY a.id" , "cliente a, cadastro b", "a.*, a.id as id_os, a.nome as nome_cliente, a.nome_fantasia as nome_fantasia_cliente, b.nome, b.nome_fantasia");
        }
        // $os = busca_detalhada_varios($conexao, "a.cliente_id = c.id AND a.veiculo_placa = b.placa AND (b.placa like '%{$pesquisa}%' OR a.sinistro  LIKE '%{$pesquisa}%' OR c.nome  OR '%{$pesquisa}%' OR b.modelo LIKE '%{$pesquisa}%') AND a.corretor_id = '{$corretor}' AND a.seguradora_id = '{$seguradora} ' " , "os a , veiculo b , cadastro c ");
        
        if($os != null){
            print json_encode($os);
        }

    break;
    case 'buscar_servicos':
        $id = $_POST['id'];

        $condicao = "a.id = '$id' AND b.cliente_id = a.id AND b.servico_id = d.id AND 
        b.funcionario_id = c.id AND a.situacao = '1'";
        $tabelas = "cliente a, cliente_servico b, funcionario c, servico d";
        $campos = "a.id, d.servico, b.data_inicio, c.nome, b.data_fim";

        $servicos = busca_detalhada_varios($conexao, $condicao , $tabelas, $campos);
        

        if($servicos != null){
            print json_encode($servicos);
        }
    break;
    default:
    break;
}