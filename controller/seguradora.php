<?php
include('crud/crud.php');
include('../conexao/conexao.php');

$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
    case 'cadastro':
        if (strlen($_POST['cnpj']) <= 0){
            $cnpj = 'NULL';
        }else{
            $cnpj = "'".$_POST['cnpj']."'";
        };

        if (strlen($_POST['ie']) <= 0){
            $ie = 'NULL';
        }else{
            $ie = "'".$_POST['ie']."'";
        };

        if (strlen($_POST['razaoSocial']) <= 0){
            $razaoSocial = 'NULL';
        }else{
            $razaoSocial = "'".$_POST['razaoSocial']."'";
        };

        if (strlen($_POST['nomeFantasia']) <= 0){
            $nomeFantasia = 'NULL';
        }else{
            $nomeFantasia = "'".$_POST['nomeFantasia']."'";
        };

        if (strlen($_POST['nome']) <= 0){
            $nome = 'NULL';
        }else{
            $nome = "'".$_POST['nome']."'";
        };

        if (strlen($_POST['nascimento']) <= 0){
            $nascimento = 'NULL';
        }else{
            $nascimento = "'".$_POST['nascimento']."'";
        };

        if (strlen($_POST['cpf']) <= 0){
            $cpf = 'NULL';
        }else{
            $cpf = "'".$_POST['cpf']."'";
        };

        if (strlen($_POST['rg']) <= 0){
            $rg = 'NULL';
        }else{
            $rg = "'".$_POST['rg']."'";
        };

        if (strlen($_POST['orgaoEmissor']) <= 0){
            $orgaoEmissor = 'NULL';
        }else{
            $orgaoEmissor = "'".$_POST['orgaoEmissor']."'";
        };

        if (strlen($_POST['email']) <= 0){
            $email = 'NULL';
        }else{
            $email = "'".$_POST['email']."'";
        };

        if (strlen($_POST['telefone']) <= 0){
            $telefone = 'NULL';
        }else{
            $telefone = "'".$_POST['telefone']."'";
        };

        if (strlen($_POST['celular']) <= 0){
            $celular = 'NULL';
        }else{
            $celular = "'".$_POST['celular']."'";
        };

        if (strlen($_POST['cep']) <= 0){
            $cep = 'NULL';
        }else{
            $cep = "'".$_POST['cep']."'";
        };

        if (strlen($_POST['endereco']) <= 0){
            $endereco = 'NULL';
        }else{
            $endereco = "'".$_POST['endereco']."'";
        };

        if (strlen($_POST['numero']) <= 0){
            $numero = 'NULL';
        }else{
            $numero = "'".$_POST['numero']."'";
        };

        if (strlen($_POST['complemento']) <= 0){
            $complemento = 'NULL';
        }else{
            $complemento = "'".$_POST['complemento']."'";
        };

        if (strlen($_POST['bairro']) <= 0){
            $bairro = 'NULL';
        }else{
            $bairro = "'".$_POST['bairro']."'";
        };

        if (strlen($_POST['cidade']) <= 0){
            $cidade = 'NULL';
        }else{
            $cidade = "'".$_POST['cidade']."'";
        };

        if (strlen($_POST['uf']) <= 0){
            $uf = 'NULL';
        }else{
            $uf = "'".$_POST['uf']."'";
        };

        if (strlen($_POST['observacoes']) <= 0){
            $observacoes = 'NULL';
        }else{
            $observacoes = "'".$_POST['observacoes']."'";
        };

        if ($cpf != 'NULL'){
            $nome_usuario = $cpf;
        }else{
            $nome_usuario = $cnpj;
        }

        $senha = md5('123');

        $campos = "login, senha, status, perfil_id";
        $valores= "$nome_usuario, '$senha', '1', '1'";
        
        $login = insere($conexao, $campos, $valores, "login");
        
        if (strlen($login['id']) <= 0){
            //Passa informações de inclusão na variável utilizada
            $campos = "tipo, nome, cpf, rg, orgao_emissor, data_nascimento, cnpj,
            inscricao_estadual, telefone, celular, razao_social, nome_fantasia, observacao,
            email, cep, endereco, numero, complemento, bairro, cidade, uf, situacao,
            login_login";
            $valores= "'seguradora', $nome, $cpf, $rg, $orgaoEmissor, $nascimento, $cnpj,
            $ie, $telefone, $celular, $razaoSocial, $nomeFantasia, $observacoes, $email,
            $cep, $endereco, $numero, $complemento, $bairro, $cidade, $uf, '1', $nome_usuario";
            
            $expediente = insere($conexao, $campos, $valores, "cadastro");

            if (strlen($expediente['id']) <= 0 ) {
                print json_encode($expediente);
            }
        }

    break;
    default:
    break;
}