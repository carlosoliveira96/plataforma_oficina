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

		$tabela = "login a, funcionario b";
		$condicao = "a.login='$login' and a.senha='$senhaMd5' and a.login = b.login_login";

        $usuario = busca_detalhada_um($conexao, $condicao, $tabela, 'a.*, b.*');
		if ($usuario['login']) {
		    logaUsuario($usuario);
		    print "1";
		} else {
			print "0";
        }
        
		break;
	case 'logout':
        logout();
        break;
	default:
		header("Location:../views/index.php");
		break;
}

?>
