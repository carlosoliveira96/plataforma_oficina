<?php
include('crud/crud.php');
include('../conexao/conexao.php');

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y');
$mes = date('m');
$ano = date('Y');
$mes_ano = date('mY');
$hora_sistema = date('H:i');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'buscar_servicos':

        $pesquisa = $_POST['pesquisa'];
        $condicao = "a.id IN (SELECT c.servico_id FROM funcionario_servico c ) AND a.servico LIKE '%{$pesquisa}%' GROUP BY a.id";
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

        $log = "";

        $destino = "";
        $nome_arquivo = "";
        // verifica se foi enviado um arquivo
        if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $nome = $_FILES['arquivo']['name'];
            $nome_arquivo = $nome;
            // Pega a extensao
            $extensao = strrchr($nome, '.');
            // Converte a extensao para minusculo
            $extensao = strtolower($extensao);
            // Somente imagens, .jpg;.jpeg;.gif;.png
            // Aqui eu enfilero as extesões permitidas e separo por ';'
            // Isso server apenas para eu poder pesquisar dentro desta String
            if(strlen($extensao) > 0){
                if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    $novoNome = md5(microtime()) . $extensao;
                    // Concatena a pasta com o nome
                    $destino = $novoNome;
                    @move_uploaded_file($arquivo_tmp, '../imagens/'.$destino);
                }
            }else{
                print 'false';
                die();
            }
        }

        if (strlen($destino) <= 0){
            $destino = 'NULL';
        }else{
            $destino = "'".$destino."'";
            $log = $log."Imagem = {$nome_arquivo}; <br>";
        };

        if (strlen($_POST['nome']) <= 0){
            $nome = 'NULL';
        }else{
            $nome = "'".$_POST['nome']."'";
            $log = $log."Nome = {$_POST['nome']}; <br>";
          
        }

        if (strlen($_POST['nascimento']) <= 0){
            $nascimento = 'NULL';
        }else{
            $nascimento = "'".$_POST['nascimento']."'";
            $log = $log."Data de nascimento = {$_POST['nascimento']}; <br>";            
        }

        if (strlen($_POST['cpf']) <= 0){
            $cpf = 'NULL';
        }else{
            $cpf = "'".$_POST['cpf']."'";
            $log = $log."CPF = {$_POST['cpf']}; <br>";                        
        }

        if (strlen($_POST['rg']) <= 0){
            $rg = 'NULL';
        }else{
            $rg = "'".$_POST['rg']."'";
            $log = $log."RG =  {$_POST['rg']}; <br>";            
            
        }

        if (strlen($_POST['orgaoEmissor']) <= 0){
            $orgaoEmissor = 'NULL';
        }else{
            $orgaoEmissor = "'".$_POST['orgaoEmissor']."'";
            $log = $log."Orgão emissor = {$_POST['orgaoEmissor']}; <br>";            
            
        }

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
            $log = $log."Email =  {$_POST['email']}; <br>";            
            
        }

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
            $log = $log."Telefone = {$_POST['telefone']}; <br>";            
            
        }

        if (strlen($_POST['celular']) <= 0){
            $celular = 'NULL';
        }else{
            $celular = "'".$_POST['celular']."'";
            $log = $log."Celular =  {$_POST['celular']}; <br>";            
            
        }

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
            $log = $log."CEP =  {$_POST['cep']}; <br>";            
            
        }

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
            $log = $log."Endereco =  {$_POST['endereco']}; <br>";            
            
        }

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
            $log = $log."Número =  {$_POST['numero']}; <br>";            
            
        }

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
            $log = $log."Complemento = {$_POST['complemento']}; <br>";            
            
        }

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
            $log = $log."Bairro =  {$_POST['bairro']}; <br>";            
            
        }

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
            $log = $log."Cidade =  {$_POST['cidade']}; <br>";            
            
        }

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
            $log = $log."UF =  {$_POST['uf']}; <br>";                        
        }

        if (strlen($_POST['observacoes']) <= 0){
            $observacoes = 'NULL';
        }else{
            $observacoes = "'".$_POST['observacoes']."'";
            $log = $log."Observações =  {$_POST['observacoes']}; <br>";            
        }

        if (strlen($_POST['tipo']) <= 0){
            $tipo = 'NULL';
        }else{
            $tipo = "'".$_POST['tipo']."'";
            $log = $log."Tipo = {$_POST['tipo']}; <br>";            
        }

        if (strlen($_POST['seguradora']) <= 0){
            $seguradora = 'NULL';
        }else{
            $seguradora = "'".$_POST['seguradora']."'";
            //fazer log seguradora
            $nomeSeguradora = busca_detalhada_um($conexao, " id = $seguradora"  , "cadastro" , " nome , razao_social");
            if($nomeSeguradora['nome'] == null){
                $nm = $nomeSeguradora['razao_social']; 
                $log = $log."Seguradora =  {$nm}; <br>";              
            }else{
                $nm = $nomeSeguradora['nome']; 
                $log = $log."Seguradora =  {$nm}; <br>";            
            }         
        }

        if (strlen($_POST['corretor']) <= 0){
            $corretor = 'NULL';
        }else{
            $corretor = "'".$_POST['corretor']."'";

            $nomeCorretor = busca_detalhada_um($conexao, " id = $corretor"  , "cadastro" , " nome , razao_social");
            if($nomeCorretor['nome'] == null){
                $nm = $nomeCorretor['razao_social']; 
                $log = $log."Corretor =  {$nm}; <br>";              
            }else{
                $nm = $nomeCorretor['nome']; 
                $log = $log."Corretor =  {$nm}; <br>";            
            }          
        }

        if (strlen($_POST['sinistro']) <= 0){
            $sinistro = 'NULL';
        }else{
            $sinistro = "'".$_POST['sinistro']."'";
            $log = $log."Sinistro = {$_POST['sinistro']}; <br>";            
        }

        if (strlen($_POST['placa']) <= 0){
            $placa = 'NULL';
        }else{
            $placa = "'".$_POST['placa']."'";
            $log = $log."Placa = {$_POST['placa']}; <br>";            
        }

        if (strlen($_POST['modelo']) <= 0){
            $modelo = 'NULL';
        }else{
            $modelo = "'".$_POST['modelo']."'";
            $log = $log."Modelo = {$_POST['modelo']}; <br>";            
        }

        if (strlen($_POST['anoModelo']) <= 0){
            $anoModelo = 'NULL';
        }else{
            $anoModelo = "'".$_POST['anoModelo']."'";
            $log = $log."Ano do Modelo = {$_POST['anoModelo']}; <br>";            
        }

        if (strlen($_POST['anoFabricacao']) <= 0){
            $anoFabricacao = 'NULL';
        }else{
            $anoFabricacao = "'".$_POST['anoFabricacao']."'";
            $log = $log."Ano de Fabricação = {$_POST['anoFabricacao']}; <br>";            
        }

        if (strlen($_POST['fabricante']) <= 0){
            $fabricante = 'NULL';
        }else{
            $fabricante = "'".$_POST['fabricante']."'";
            $log = $log."Fabricante = {$_POST['fabricante']}; <br>";            
        }

        if (strlen($_POST['cor']) <= 0){
            $cor = 'NULL';
        }else{
            $cor = "'".$_POST['cor']."'";
            $log = $log."Cor = {$_POST['cor']}; <br>";            
        }

        if (strlen($_POST['chassi']) <= 0){
            $chassi = 'NULL';
        }else{
            $chassi = "'".$_POST['chassi']."'";
            $log = $log."Chassi =  {$_POST['chassi']};<br>";            
        }

        if (strlen($_POST['dataEntrada']) <= 0){
            $dataEntrada = 'NULL';
        }else{
            $dataEntrada = "'".$_POST['dataEntrada']."'";
            $log = $log."Data de entrada = {$_POST['dataEntrada']}; <br>";            
        }

        if (strlen($_POST['dataVistoria']) <= 0){
            $dataVistoria = 'NULL';
        }else{
            $dataVistoria = "'".$_POST['dataVistoria']."'";
            $log = $log."Data da Vistoria =  {$_POST['dataVistoria']}; <br>";            
        }

        if (strlen($_POST['dataAutorizacao']) <= 0){
            $dataAutorizacao = 'NULL';
        }else{
            $dataAutorizacao = "'".$_POST['dataAutorizacao']."'";
            $log = $log."Data da autorização = {$_POST['dataAutorizacao']};<br>";            
        }

        if (strlen($_POST['horaEntrada']) <= 0){
            $horaEntrada = 'NULL';
        }else{
            $horaEntrada = "'".$_POST['horaEntrada']."'";
            $log = $log."Hora da entrada = {$_POST['horaEntrada']}; <br>";            
        }


        $meu_id = $_POST['meu_id'];

        $nr_reg = busca_detalhada_um($conexao, "mes_ano_cadastro = '{$mes_ano}' limit 1" , "cliente" , "count(mes_ano_cadastro) as quantidade");

        $quantidade = array_shift($nr_reg);
        $numero_registro = intval($quantidade) + 1;

        $numero_servico = $numero_registro. '.' .$mes_ano;

        $senha = md5('123');

        $campos = "login, senha, status, perfil_id";
        $valores= "{$numero_servico}, '$senha', '1', '6'";

        $login = insere($conexao, $campos, $valores, "login");

        if(intval($mes) < 10 ){
          $data_mes_ano = '0'. $mes_ano;
        }else {
          $data_mes_ano = $mes_ano;
        }

        if (strlen($login['id']) <= 0) {

            $campos = "numero_servico, mes_ano_cadastro, data_cadastro, nome, cpf, rg,
                    orgao_emissor, data_nascimento, telefone, celular, observacao, email,
                    cep, endereco, numero, complemento, bairro, cidade, uf, situacao,
                    login_login, placa, fabricante, modelo, ano_fabricacao, ano_modelo,
                    cor, chassi, sinistro, data_vistoria_realizada, data_autorizacao,
                    data_entrada, seguradora_id, corretor_id, url_imagem , hora_entrada";
            $valores = "{$numero_servico}, '{$mes_ano}' , '$date', {$nome}, {$cpf},
                    {$rg}, {$orgaoEmissor}, {$nascimento}, {$telefone}, {$celular},
                    {$observacoes}, {$email}, {$cep}, {$endereco}, {$numero}, {$complemento},
                    {$bairro}, {$cidade}, {$uf}, '1', {$numero_servico}, {$placa}, {$fabricante},
                    {$modelo}, {$anoFabricacao}, {$anoModelo}, {$cor}, {$chassi}, {$sinistro},
                    {$dataVistoria}, {$dataAutorizacao}, {$dataEntrada}, {$seguradora},
                    {$corretor}, {$destino} , {$horaEntrada}";

            $cliente = insere($conexao, $campos , $valores , "cliente");

            //gravação do log
            $campos = "data ,  hora ,  titulo ,  descricao , cliente_id , funcionario_id , historico_id";
            $valores = " '{$date}' , '{$hora_sistema}' , 'Inclusão' , '{$log}' , '{$cliente}' , {$meu_id}  , 1";
            $grava_log = insere($conexao, $campos , $valores , "historico");
            

            if ($cliente > 0) {

                $lista_servicos = json_decode($_POST['servicos']);
                

                foreach($lista_servicos as $servico){

                    $id_funcionario = $servico -> id_funcionario;
                    $id_servico = $servico -> id_servico;
                    $qtd_pecas = $servico -> qtd_pecas;
                    if (strlen($qtd_pecas) <= 0){
                        $qtd_pecas = '0';
                    }
                   

                    $nomeFuncionario = busca_detalhada_um($conexao, " id = $id_funcionario"  , "funcionario" , " nome ");
                    $nomeServico = busca_detalhada_um($conexao, " id = $id_servico"  , "servico" , " servico");
                    
                    $campos =  'cliente_id , servico_id , funcionario_id , situacao , qtd';
                    $valores = "'{$cliente}' , '{$id_servico}' , {$id_funcionario} , 1 , '{$qtd_pecas}'";

                    $cliente_servico = insere($conexao, $campos , $valores , "cliente_servico");

                    //Gravação do log
                    $log = "Servico =  {$nomeServico['servico']}; <br> Funcionario = {$nomeFuncionario['nome']}; <br> Quantidade de peças = {$qtd_pecas}; <br>";  
                    $campos = "data ,  hora ,  titulo ,  descricao , cliente_id , funcionario_id , historico_id";
                    $valores = " '{$date}' , '{$hora_sistema}' , 'Inclusão' , '{$log}' , '{$cliente}' , {$meu_id}  , 1";
                    $grava_log = insere($conexao, $campos , $valores , "historico");          
                   
                    
                }

                print json_encode($cliente);
            }
            }
    break;
    default:
    break;
}
