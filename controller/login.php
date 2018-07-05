<?php
include('crud/crud.php');
include('../conexao/conexao.php');


$funcao = $_POST['funcao'];

session_start();
switch ($funcao) {
	case 'login':

		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$senhaMd5 = md5($senha);

		$tabela = "login a, funcionario b , perfil c";
		$condicao = "a.login='$login' and a.senha='$senhaMd5' and a.login = b.login_login and a.perfil_id = c.id";

    	$usuario = busca_detalhada_um($conexao, $condicao, $tabela, 'a.*, b.* , c.id as id_perfil , c.perfil');

		if ($usuario['login']) {
			if($usuario['status'] == "3"){
				print "2";
			}else{
				logaUsuario($usuario);
				print "1";
			}
		} else {
			print "0";
    	}

		break;
	case 'logout':
        logout();
		break;
	case 'consultar_login':
		$login = $_POST['cpf'];

		$tabela = "login";
		$condicao = "login='$login' and status = 3";

    	$usuario = busca_detalhada_um($conexao, $condicao, $tabela);

		if ($usuario['login']) {
			print '1';
		}else{
			print '0';
		}
	
		break;
	case 'alterar_senha_primeiro_acesso':
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$senhaMd5 = md5($senha);

        $alteracao = altera($conexao, "senha = '{$senhaMd5}' , status = 1 ", "login = '{$login}' ", "login");
		
		if($alteracao == "0"){
			print "1";
		}else{
			print "0";			
		}
		
		break;
	default:
		header("Location:../views/index.php");
		break;
}

?>
