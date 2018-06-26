<?php
include('crud/crud.php');
include('../conexao/conexao.php');

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$mes = date('m');
$ano = date('Y');
$mes_ano = date('Y-m');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'buscar_servicos':
        $pesquisa = $_POST['pesquisa'];
        $condicao = "a.id IN (SELECT c.servico_id FROM funcionario_servico c ) AND 
        a.servico LIKE '%{$pesquisa}%' GROUP BY a.id";
        $tabela = "servico a, funcionario_servico b";

        $servicos = busca_detalhada_varios($conexao, $condicao, $tabela, "a.*");

        if($servicos != null){
            print json_encode($servicos);
        }
    break;
    case 'busca_funcionarios':
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
    case 'incluir':

        $destino = "";
        // verifica se foi enviado um arquivo 
        if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];
            // Pega a extensao
            $extensao = strrchr($nome, '.');
            // Converte a extensao para mimusculo
            $extensao = strtolower($extensao);
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
            if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                // Cria um nome único para esta imagem
                // Evita que duplique as imagens no servidor.
                $novoNome = md5(microtime()) . $extensao;
                // Concatena a pasta com o nome
                $destino = $novoNome;
                @move_uploaded_file($arquivo_tmp, '../imagens/'.$destino);
            }
        } 

        if (strlen($destino) <= 0){
            $destino = 'NULL';
        }else{
            $destino = "'".$destino."'";
        };

        if (strlen($_POST['nome']) <= 0){
            $nome = 'NULL';
        }else{
            $nome = "'".$_POST['nome']."'";
        }

        if (strlen($_POST['nascimento']) <= 0){
            $nascimento = 'NULL';
        }else{
            $nascimento = "'".$_POST['nascimento']."'";
        }

        if (strlen($_POST['cpf']) <= 0){
            $cpf = 'NULL';
        }else{
            $cpf = "'".$_POST['cpf']."'";
        }

        if (strlen($_POST['rg']) <= 0){
            $rg = 'NULL';
        }else{
            $rg = "'".$_POST['rg']."'";
        }

        if (strlen($_POST['orgaoEmissor']) <= 0){
            $orgaoEmissor = 'NULL';
        }else{
            $orgaoEmissor = "'".$_POST['orgaoEmissor']."'";
        }

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
        }

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
        }

        if (strlen($_POST['celular']) <= 0){
            $celular = 'NULL';
        }else{
            $celular = "'".$_POST['celular']."'";
        }

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
        }

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
        }

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
        }

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
        }

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
        }

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
        }

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
        }

        if (strlen($_POST['observacoes']) <= 0){
            $observacoes = 'NULL';
        }else{
            $observacoes = "'".$_POST['observacoes']."'";
        }

        if (strlen($_POST['tipo']) <= 0){
            $tipo = 'NULL';
        }else{
            $tipo = "'".$_POST['tipo']."'";
        }

        if (strlen($_POST['seguradora']) <= 0){
            $seguradora = 'NULL';
        }else{
            $seguradora = "'".$_POST['seguradora']."'";
        }

        if (strlen($_POST['corretor']) <= 0){
            $corretor = 'NULL';
        }else{
            $corretor = "'".$_POST['corretor']."'";
        }

        if (strlen($_POST['sinistro']) <= 0){
            $sinistro = 'NULL';
        }else{
            $sinistro = "'".$_POST['sinistro']."'";
        }

        if (strlen($_POST['placa']) <= 0){
            $placa = 'NULL';
        }else{
            $placa = "'".$_POST['placa']."'";
        }

        if (strlen($_POST['modelo']) <= 0){
            $modelo = 'NULL';
        }else{
            $modelo = "'".$_POST['modelo']."'";
        }

        if (strlen($_POST['anoModelo']) <= 0){
            $anoModelo = 'NULL';
        }else{
            $anoModelo = "'".$_POST['anoModelo']."'";
        }

        if (strlen($_POST['anoFabricacao']) <= 0){
            $anoFabricacao = 'NULL';
        }else{
            $anoFabricacao = "'".$_POST['anoFabricacao']."'";
        }
        
        if (strlen($_POST['fabricante']) <= 0){
            $fabricante = 'NULL';
        }else{
            $fabricante = "'".$_POST['fabricante']."'";
        }

        if (strlen($_POST['cor']) <= 0){
            $cor = 'NULL';
        }else{
            $cor = "'".$_POST['cor']."'";
        }

        if (strlen($_POST['chassi']) <= 0){
            $chassi = 'NULL';
        }else{
            $chassi = "'".$_POST['chassi']."'";
        }

        if (strlen($_POST['dataEntrada']) <= 0){
            $dataEntrada = 'NULL';
        }else{
            $dataEntrada = "'".$_POST['dataEntrada']."'";
        }

        if (strlen($_POST['dataVistoria']) <= 0){
            $dataVistoria = 'NULL';
        }else{
            $dataVistoria = "'".$_POST['dataVistoria']."'";
        }

        if (strlen($_POST['dataAutorizacao']) <= 0){
            $dataAutorizacao = 'NULL';
        }else{
            $dataAutorizacao = "'".$_POST['dataAutorizacao']."'";
        }

        $senha = md5('123');

        $campos = "login, senha, status, perfil_id";
        $valores= "{$cpf}, '$senha', '1', '1'";
        
        $login = insere($conexao, $campos, $valores, "login");

        if (strlen($login['id']) <= 0) {
            $id = mysqli_insert_id($conexao);
            $numero_servico = $id.'.'.$mes.$ano;

            if($_POST['check'] == '1'){
                if (strlen($_POST['horaEntrada']) <= 0){
                    $horaEntrada = 'NULL';
                }else{
                    $horaEntrada = "'".$_POST['horaEntrada']."'";
                }
            }else {
                $campos = "numero_servico, mes_ano_cadastro, data_cadastro, nome, cpf, rg,
                        orgao_emissor, data_nascimento, telefone, celular, observacao, email,
                        cep, endereco, numero, complemento, bairro, cidade, uf, situacao,
                        login_login, placa, fabricante, modelo, ano_fabricacao, ano_modelo,
                        cor, chassi, sinistro, data_vistoria_realizada, data_autorizacao,
                        data_entrada, seguradora_id, corretor_id, url_imagem";
                $valores = "{$numero_servico}, $mes_ano, '$date', {$nome}, {$cpf}, 
                        {$rg}, {$orgaoEmissor}, {$nascimento}, {$telefone}, {$celular},
                        {$observacoes}, {$email}, {$cep}, {$endereco}, {$numero}, {$complemento},
                        {$bairro}, {$cidade}, {$uf}, '1', {$cpf}, {$placa}, {$fabricante},
                        {$modelo}, {$anoFabricacao}, {$anoModelo}, {$cor}, {$chassi}, {$sinistro},
                        {$dataVistoria}, {$dataAutorizacao}, {$dataEntrada}, {$seguradora},
                        {$corretor}, {$destino}";
            }

                $empresa = insere($conexao, $campos , $valores , "cliente"); 
                if (strlen($empresa['id']) <= 0 ) {
                    print json_encode($empresa);
                }
            }
    break;
    default:
    break;
}