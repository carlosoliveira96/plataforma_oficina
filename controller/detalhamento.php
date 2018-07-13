<?php
include('crud/crud.php');
include('../conexao/conexao.php');

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$hora = date('H:i');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'buscar_log':
        $id = $_POST['id'];
        $tabela = "historico a, funcionario b";
        $campos = "a.*, b.nome, 
        concat(substring(a.data,7,4),substring(a.data,4,2),substring(a.data,1,2)) as data2";
        $condicao = "a.cliente_id = '$id' AND a.funcionario_id  = b.id ORDER BY data2 DESC";
        
        $log =  busca_detalhada_varios($conexao, $condicao, $tabela, $campos);

        if($log != null){
            print json_encode($log);
        }

    break;
    case 'buscar_os':
        $id = $_POST['id'];
        $tabela = "cliente a, cadastro corretor, cadastro seguradora";
        $campos = "a.*, corretor.nome as nome_corretor, 
        corretor.nome_fantasia as nome_juridico_corretor,
        seguradora.nome as nome_seguradora, seguradora.nome_fantasia as nome_juridico_seguradora";
        $condicao = "a.id = '$id' AND (a.corretor_id = corretor.id OR a.corretor_id is null) AND
        (a.seguradora_id = seguradora.id OR a.seguradora_id is null) ORDER BY a.id";
        
        $os =  busca_detalhada_um($conexao, $condicao, $tabela, $campos);

        if($os != null){
            print json_encode($os);
        }

    break;
    case 'buscar_funcionario':
        if (empty($_POST['pesquisa'])){
            $condicao = "situacao = 1";
            $tabela = "funcionario";
            $campos = "id, nome";
            $funcionarios = busca_detalhada_varios($conexao, $condicao, $tabela, $campos);
        }else {
            $pesquisa = $_POST['pesquisa'];
            $condicao = "situacao = 1 AND nome LIKE '%{$pesquisa}%'";
            $tabela = "funcionario";
            $campos = "id, nome";
            $funcionarios = busca_detalhada_varios($conexao, $condicao, $tabela, $campos);
        }

        if($funcionarios != null){
            print json_encode($funcionarios);
        }

    break;
    case 'buscar_pendencias':
        $id = $_POST['id'];

        $condicao = "c.id = '$id' AND a.cliente_id = c.id AND a.funcionario_id = b.id
        AND status != 3";
        $tabelas = "pendencia_interna a, funcionario b, cliente c";
        $campos = "a.id, b.nome, a.servico";

        $pendencias = busca_detalhada_varios($conexao, $condicao , $tabelas, $campos);

        if($pendencias != null){
            print json_encode($pendencias);
        }

    break;
    case 'busca_servico_cadastrado':
        $id = $_POST['id'];

        $condicao = "a.cliente_id = '$id' AND a.servico_id = c.id AND a.funcionario_id = b.id
        AND a.situacao = 1";
        $tabelas = "cliente_servico a, funcionario b, servico c";
        $campos = "c.servico, b.nome, a.qtd, a.cliente_id, a.servico_id, a.funcionario_id";

        $servicos = busca_detalhada_varios($conexao, $condicao , $tabelas, $campos);

        if($servicos != null){
            print json_encode($servicos);
        }

    break;
    case 'buscar_servicos':
        $pesquisa = $_POST['pesquisa'];
        $condicao = "a.id IN (SELECT c.servico_id FROM funcionario_servico c ) AND 
        a.servico LIKE '%{$pesquisa}%' AND a.situacao = 1 GROUP BY a.id";
        $tabela = "servico a, funcionario_servico b";

        $servicos = busca_detalhada_varios($conexao, $condicao, $tabela, "a.*");

        if($servicos != null){
            print json_encode($servicos);
        }
    break;
    case 'busca_funcionarios_servico':
        $id = $_POST['servico_id'];
        $pesquisa = '';
        $condicao = "b.servico_id = '{$id}' and a.id = b.funcionario_id and a.nome 
        LIKE '%{$pesquisa}%'";
        $tabela = "funcionario a , funcionario_servico b";

        $funcionarios = busca_detalhada_varios($conexao, $condicao, $tabela, "a.*");
    
        if($funcionarios != null){
            print json_encode($funcionarios);
        }
    break;
    case 'alterar_cliente':
        $lista = json_decode($_POST['alterados']);
        $id = $_POST['id'];
        $id_logado = $_POST['id_funcionario'];
        $lista_valor = $lista->lista_valores;
        $i = 0;
        $campos_valores = "";
        $log = "";
        foreach ($lista->lista_alterados as $lista){
            $valor = $lista_valor[$i];
            include('detalhamento/escolha.php');
            $i++;
        }

        $condicao = "id = '$id'";
        $tabela = "cliente";
        $cliente_veiculo = altera($conexao, $campos_valores, $condicao, $tabela);

        if (strlen($cliente_veiculo['id']) <= 0 ) {
            $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
            $valores= "'$date', '$hora', 'Alteração - Cliente & Veículo', '$log', '$id', 
            '$id_logado', '1'";

            $historico = insere($conexao, $campos, $valores, "historico");
            
            if (strlen($historico['id']) <= 0 ) {
               print json_encode($historico);
            }
        }
    break;
    case 'alterar_tramitacao':
        //REcebe checks
        $check_pt = $_POST['check_pt'];
        $check_pend_pecas = $_POST['check_pend_pecas'];
        $check_retorno = $_POST['check_retorno'];
        $check_tc = $_POST['check_tc'];
        $check_pronto = $_POST['check_pronto'];
        //
        $lista = json_decode($_POST['alterados']);
        $id = $_POST['id'];
        $id_logado = $_POST['id_funcionario'];
        $lista_valor = $lista->lista_valores;
        $i = 0;
        $campos_valores = "";
        $log = "";

        foreach ($lista->lista_alterados as $lista){
            $valor = $lista_valor[$i];
            include('detalhamento/escolha.php');
            $i++;
        }

        //

        if($check_pt == '1'){
            $log = $log."Perda total = Veículo marcado como perda total \n";
        }
        if($check_pend_pecas == '1'){
            $log = $log."Pendencias de peças = Veículo marcado como pendencias de peças \n";
        }
        if($check_retorno == '1'){
            $log = $log."Retorno = Veículo marcado como retorno \n";
        }
        if($check_tc == '1'){
            $log = $log."Termo de compromisso = Veículo com existência de termo de compromisso \n";
        }
        if($check_pronto == '1'){
            $log = $log."Pronto = Veículo marcado como pronto \n";
        }
        //
        $campos_valores = $campos_valores."perda_total = {$check_pt}, 
        pendencia_peca = {$check_pend_pecas}, retono = {$check_retorno}, 
        termo_compromisso = {$check_tc}, pronto = {$check_pronto}";
        // var_dump($campos_valores);
        // die();
        $condicao = "id = '$id'";
        $tabela = "cliente";
        $cliente_veiculo = altera($conexao, $campos_valores, $condicao, $tabela);

        if (strlen($cliente_veiculo['id']) <= 0 ) {
            $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
            $valores= "'$date', '$hora', 'Alteração - Tramitação', '$log', '$id', 
            '$id_logado', '1'";

            $historico = insere($conexao, $campos, $valores, "historico");
            
            if (strlen($historico['id']) <= 0 ) {
               print json_encode($historico);
            }
        }
    break;
    case 'remove_pendencias':
        $id_logado = $_POST['meu_id'];
        $idFuncionario = $_POST['id_funcionario'];
        $nomeFuncionario = $_POST['nome'];
        $id_os = $_POST['id'];

        $campos_valores = "status = 3";
        $condicao = "id = '$idFuncionario'";
        $tabela = "pendencia_interna";
        $pendencia_interna = altera($conexao, $campos_valores, $condicao, $tabela);

        if (strlen($pendencia_interna['id']) <= 0 ) {
            $log = "Excluído pendência do funcionário $nomeFuncionario";
            $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
            $valores= "'$date', '$hora', 'Alteração - Pendencia interna', '$log', '$id_os', 
            '$id_logado', '1'";

            $historico = insere($conexao, $campos, $valores, "historico");
            
            if (strlen($historico['id']) <= 0 ) {
               print json_encode($historico);
            }
        }
    break;
    case 'remove_servicos':
        $id_logado = $_POST['meu_id'];
        $idServico = $_POST['id_servico'];
        $servico = $_POST['servico'];
        $id_os = $_POST['id'];

        $campos_valores = "situacao = 0";
        $condicao = "cliente_id = '$id_os' AND servico_id = '$idServico'";
        $tabela = "cliente_servico";
        $servicos = altera($conexao, $campos_valores, $condicao, $tabela);

        if (strlen($servicos['id']) <= 0 ) {
            $log = "Excluído serviço: $servico";
            $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
            $valores= "'$date', '$hora', 'Alteração - Pendencia interna', '$log', '$id_os', 
            '$id_logado', '1'";

            $historico = insere($conexao, $campos, $valores, "historico");
            
            if (strlen($historico['id']) <= 0 ) {
               print json_encode($historico);
            }
        }
    break;
    case 'salva_pendencias':
        $id_logado = $_POST['meu_id'];
        $idFuncionario = $_POST['id_funcionario'];
        $nomeFuncionario = $_POST['nome'];
        $id_os = $_POST['id'];

        if(strlen($_POST['servico']) <= 0){
            $servico = 'NULL';
        }else {
            $servico = "'".$_POST['servico']."'";
        }

        $campos = "servico, status, cliente_id, funcionario_id";
        $valores = "$servico, '0', '$id_os', $idFuncionario";
        $tabela = "pendencia_interna";
        $pendencia_interna = insere($conexao, $campos, $valores, $tabela);

        if (strlen($pendencia_interna['id']) <= 0 ) {
            $log = "Incluído pendência do funcionário $nomeFuncionario";
            $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
            $valores= "'$date', '$hora', 'Alteração - Pendencia interna', '$log', '$id_os', 
            '$id_logado', '1'";

            $historico = insere($conexao, $campos, $valores, "historico");
            
            if (strlen($historico['id']) <= 0 ) {
               print json_encode($historico);
            }
        }
    break;
    case 'salva_servicos':
        $id_logado = $_POST['meu_id'];
        $funcionario_id = $_POST['funcionario_id'];
        $servico_id = $_POST['servico_id'];
        $id_os = $_POST['cliente_id'];

        if (strlen($_POST['qtd_pecas']) <= 0){
            $qtd_pecas = 'NULL';
        }else{
            $qtd_pecas = "'".$_POST['qtd_pecas']."'";
        }

        $condicao = "a.id = '$funcionario_id' AND b.id = '$servico_id'";
        $campos = "a.nome as nome, b.servico as servico";
        $tabela = "funcionario a, servico b";
        $servicos = busca_detalhada_um($conexao, $condicao , $tabela , $campos);

        if($servicos != null){
            $campos = "cliente_id, servico_id, funcionario_id, status, situacao, qtd";
            $valores = "'$id_os', '$servico_id', '$funcionario_id', '1', '1', '$qtd_pecas'";
            $tabela = "cliente_servico";
            $pendencia_interna = insere($conexao, $campos, $valores, $tabela);

            if (strlen($pendencia_interna['id']) <= 0 ){
                $log = "Inclusão: Serviço TEste<br> Funcionário teste";
                $campos = "data, hora, titulo, descricao, cliente_id, funcionario_id, historico_id";
                $valores= "'$date', '$hora', 'Alteração - Pendencia interna', '$log', '$id_os', 
                '$id_logado', '1'";

                $historico = insere($conexao, $campos, $valores, "historico");
                
                if (strlen($historico['id']) <= 0 ) {
                    print json_encode($historico);
                }
            }
        }

        // $campos = "servico, status, cliente_id, funcionario_id";
        // $valores = "$servico, '0', '$id_os', $idFuncionario";
        // $tabela = "pendencia_interna";
        // $pendencia_interna = insere($conexao, $campos, $valores, $tabela);

        // if (strlen($pendencia_interna['id']) <= 0 ) {
        
        // }
    break;
    default:
    break;
}