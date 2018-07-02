<?php
include('crud/crud.php');
include('../conexao/conexao.php');

//Pega a função passada do javascript
$funcao = $_POST["funcao"];
session_start();

switch ($funcao){
    case 'busca_funcionarios':
        $meu_id = $_POST['meu_id'];

        $funcionrios = busca_detalhada_varios($conexao, "id != '{$meu_id}'", 'funcionario' );

        if($funcionrios != null){
            print json_encode($funcionrios);
        }
        break;
    case 'busca_conversa':

        $meu_id = $_POST['meu_id'];
        $funcionario_id1 = $_POST['funcionario_id'];

        $mensagens = "";

        $mensagens = busca_detalhada_varios($conexao, "( funcionario_de = {$funcionario_id1} and funcionario_para = {$meu_id} ) or (funcionario_de = {$meu_id} and funcionario_para = {$funcionario_id1})" , 'mensagem' );

        if($mensagens != null){
            print json_encode($mensagens);
        }

        break;
    case 'busca_quantidade_notificacoes':

        $meu_id = $_POST['meu_id'];

        $quantidade = busca_detalhada_um($conexao, "funcionario_id = '{$meu_id} AND status = 0' limit 1" , "notificacao" , "count(status) as quantidade");

        print array_shift($quantidade);
        break;

    case 'salva_mensagem':

        $meu_id = $_POST['meu_id'];
        $id_contato = $_POST['id_contato'];
        $lista_id = $_POST['lista_id'];
        $array_id = json_decode($lista_id);
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $msg = $_POST['mensagem'];
      
        foreach ($array_id->id as $id_funcionario){
    
            $campos = "data , hora , conteudo , funcionario_de , funcionario_para ";
            $valores = " '{$data}' , '{$hora}', '{$msg}' , '{$meu_id}' , '{$id_funcionario}' ";
    
            $mensagem = insere($conexao, $campos , $valores , 'mensagem' );

            $nome_funcionario = busca_detalhada_um($conexao, "id = '{$meu_id}' limit 1" , "funcionario" , "nome");
            $nome = array_shift($nome_funcionario);
                
            $titulo = "Mensagem de ".$nome;
            $descricao = "Você recebeu uma mensagem de ".$nome." no comunicador no dia ".$data." às ".$hora;
            
            $campos  = "titulo , descricao , data , hora , status, situacao , mensagem_id , funcionario_id ";
            $valores = " '{$titulo}' , '{$descricao}', '{$data}' , '{$hora}' , 1 , 1 , '{$mensagem}' , '{$id_funcionario}' ";
            
            $notificacao = insere($conexao, $campos , $valores , 'notificacao' );

            print $notificacao;
            
        }

        break;
    case 'busca_conversas':
        $pesquisa = $_POST['pesquisa'];
        $meu_id = $_POST['meu_id'];

        $funcionarios = busca_detalhada_varios($conexao, "a.funcionario_id = '{$meu_id}' and a.funcionario_id1 = b.id  and b.nome LIKE '%$pesquisa%' group by  a.funcionario_id1 " , "comunicador a , funcionario b ", "b.id , b.nome , b.url_imagem");
        $funcionarios1 = busca_detalhada_varios($conexao, "a.funcionario_id1 = '{$meu_id}' and a.funcionario_id = b.id  and b.nome LIKE '%$pesquisa%' group by  a.funcionario_id " , "comunicador a , funcionario b ", "b.id , b.nome , b.url_imagem");


        $result = array_merge($funcionarios , $funcionarios1);
    
        if($result != null ){
            print json_encode($result);
        }
        break;
    case 'salva_grupo':
        $nome = $_POST['nome'];
        $id_funcionario = $_POST['id'];

        $grupo = insere($conexao, 'nome', "'{$nome}'" , 'grupo' );

        if($grupo > 0){

            $grupo_funcionario = insere($conexao, 'grupo_id , funcionario_id', "'{$grupo}' , '{$id_funcionario}' " , 'grupo_funcionario' );
            if(strlen($grupo_funcionario) > 0 ){
                print $grupo;
            }
        }
        
        break;
    case 'salva_participantes':

        $id_grupo = $_POST['id_grupo'];
        $id_funcionario = $_POST['id_funcionario'];

        $grupo_funcionario = insere($conexao, 'grupo_id , funcionario_id', "'{$id_grupo}' , '{$id_funcionario}' " , 'grupo_funcionario' );
        
        if(strlen($grupo_funcionario) > 0 ){
            print $grupo_funcionario;
        }
        break;
    case 'busca_grupos':

        $id = $_POST['id'];
        $pesquisa = $_POST['pesquisa'];

        $grupos = busca_detalhada_varios($conexao, "b.funcionario_id = {$id} AND b.grupo_id = a.id AND a.nome LIKE '%{$pesquisa}%'" , "grupo a , grupo_funcionario b ", "a.id , a.nome");
        
        if($grupos != null ){
            print json_encode($grupos);
        }
        break;
    default:
        break;
}